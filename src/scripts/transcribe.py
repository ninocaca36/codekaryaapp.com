import sys
import speech_recognition as sr
from pydub import AudioSegment
import os

def transcribe(file_path):
    temp_wav = None
    try:
        # Convert to wav (required by SpeechRecognition)
        # We'll create a temporary wav file
        audio = AudioSegment.from_file(file_path)
        temp_wav = file_path + ".temp.wav"
        audio.export(temp_wav, format="wav")

        r = sr.Recognizer()
        with sr.AudioFile(temp_wav) as source:
            audio_data = r.record(source)
            try:
                # recognize_google is free and high quality for Indonesian
                text = r.recognize_google(audio_data, language="id-ID")
                return text
            except sr.UnknownValueError:
                return "Error: Audio tidak dapat dimengerti atau terlalu sunyi."
            except sr.RequestError as e:
                return f"Error: Gagal menghubungi layanan; {e}"
    except Exception as e:
        return f"Error: Terjadi kesalahan pemrosesan file; {e}"
    finally:
        # Cleanup temp file
        if temp_wav and os.path.exists(temp_wav):
            os.remove(temp_wav)

if __name__ == "__main__":
    if len(sys.argv) > 1:
        # Set UTF-8 encoding for output to handle Indonesian characters if any
        sys.stdout.reconfigure(encoding='utf-8')
        print(transcribe(sys.argv[1]))
    else:
        print("Error: No file path provided")
