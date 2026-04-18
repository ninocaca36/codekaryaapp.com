<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        $packages = [
            ['id' => 1, 'diamonds' => 100, 'price' => 15000, 'icon' => 'ni-diamond'],
            ['id' => 2, 'diamonds' => 500, 'price' => 70000, 'icon' => 'ni-diamond-fill'],
            ['id' => 3, 'diamonds' => 1000, 'price' => 130000, 'icon' => 'ni-box-view-fill'],
            ['id' => 4, 'diamonds' => 5000, 'price' => 600000, 'icon' => 'ni-grid-add-fill'],
        ];

        return view('backend.store.index', compact('packages'));
    }

    public function buy(Request $request)
    {
        $user = Auth::user();
        $diamonds = $request->diamonds;
        
        // Simulasi pembelian berhasil
        $user->increment('diamonds', $diamonds);

        return back()->with('success', "Berhasil membeli $diamonds Diamond! Saldo Anda sekarang: $user->diamonds");
    }

    public function sawer(Request $request)
    {
        $sender = Auth::user();
        $giftType = $request->gift_type;
        $receiverId = $request->receiver_id;

        $gifts = [
            'rose' => ['name' => 'Mawar', 'price' => 1, 'icon' => '🌹'],
            'tiger' => ['name' => 'Macan', 'price' => 500, 'icon' => '🐯'],
            'croc' => ['name' => 'Buaya', 'price' => 1000, 'icon' => '🐊'],
            'plane' => ['name' => 'Kapal Terbang', 'price' => 5000, 'icon' => '✈️'],
        ];

        if (!isset($gifts[$giftType])) {
            return response()->json(['success' => false, 'message' => 'Jenis Gift tidak valid!']);
        }

        $amount = $gifts[$giftType]['price'];

        if ($sender->diamonds < $amount) {
            return response()->json(['success' => false, 'message' => 'Saldo Diamond tidak cukup!']);
        }

        $receiver = User::findOrFail($receiverId);
        
        // Transfer Diamond
        $sender->decrement('diamonds', $amount);
        $receiver->increment('diamonds', $amount);

        return response()->json([
            'success' => true, 
            'message' => "Berhasil mengirim {$gifts[$giftType]['name']} ke $receiver->name!",
            'gift_icon' => $gifts[$giftType]['icon'],
            'gift_type' => $giftType,
            'new_balance' => $sender->diamonds
        ]);
    }
}
