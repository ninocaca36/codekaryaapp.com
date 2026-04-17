import sys
import speech_recognition as sr
from pydub import AudioSegment
from pydub.utils import make_chunks
import os

def transcribe(file_path):
    try:
        # Load audio
        audio = AudioSegment.from_file(file_path)
        audio = audio.set_channels(1).set_frame_rate(16000)
        
        # Potong audio menjadi bagian-bagian kecil (45 detik per bagian)
        # 45 detik adalah batas aman agar API tidak menolak (Bad Request)
        chunk_length_ms = 45000 
        chunks = make_chunks(audio, chunk_length_ms)
        
        full_text = []
        r = sr.Recognizer()
        
        # Tambahkan indikasi progres sederhana ke stderr (biar tidak mengganggu output utama)
        total_chunks = len(chunks)
        
        for i, chunk in enumerate(chunks):
            # Simpan chunk sementara
            chunk_name = f"{file_path}_chunk{i}.wav"
            chunk.export(chunk_name, format="wav")
            
            with sr.AudioFile(chunk_name) as source:
                audio_data = r.record(source)
                try:
                    # Transkrip per bagian
                    text = r.recognize_google(audio_data, language="id-ID")
                    full_text.append(text)
                except sr.UnknownValueError:
                    # Sunyi atau tidak terbaca, abaikan saja
                    pass
                except sr.RequestError:
                    # Masalah API, berhenti atau lanjut? Lanjut ke chunk berikutnya
                    pass
                finally:
                    # Hapus file chunk setelah diproses
                    if os.path.exists(chunk_name):
                        os.remove(chunk_name)
        
        if not full_text:
            return "Error: Tidak ada kata-kata yang berhasil dideteksi dalam audio ini."
            
        return " ".join(full_text)

    except Exception as e:
        return f"Error: Terjadi kesalahan sistem saat memproses durasi panjang; {e}"

if __name__ == "__main__":
    if len(sys.argv) > 1:
        # Memastikan encoding output UTF-8 untuk teks Indonesia
        if hasattr(sys.stdout, 'reconfigure'):
            sys.stdout.reconfigure(encoding='utf-8')
        print(transcribe(sys.argv[1]))
    else:
        print("Error: Path file tidak ditemukan")
