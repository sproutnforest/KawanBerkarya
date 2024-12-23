<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function storeData()
    {
        $data = [
            ['title' => 'Item 1', 'description' => 'Description of item 1', 'image' => 'path/to/image1.jpg'],
            ['title' => 'Item 2', 'description' => 'Description of item 2', 'image' => 'path/to/image2.jpg'],
            ['title' => 'Item 3', 'description' => 'Description of item 3', 'image' => 'path/to/image3.jpg'],
        ];

        // Store data in a JSON file
        Storage::disk('local')->put('data.json', json_encode($data));

        return response()->json(['message' => 'Data stored successfully']);
    }

    public function displayData()
    {
        $data = [
            ['title' => 'Meja Lipat Kecil', 'price' => 'Rp 60.000', 'location' => 'Jawa Barat', 'rating' => '4.3', 'image' => 'mejalipat.png'],
            ['title' => 'Taplak Meja Rajut', 'price' => 'Rp 80.000', 'location' => 'Jakarta Pusat', 'rating' => '4.9', 'image' => 'taplak.png'],
            ['title' => 'Sapu Ijuk Gagang Kayu', 'price' => 'Rp 32.000', 'location' => 'Jawa Timur', 'rating' => '4.2', 'image' => 'sapu.png'],
            ['title' => 'Tas Belanja Anyam Rotan', 'price' => 'Rp 97.500', 'location' => 'Jawa Barat', 'rating' => '5', 'image' => 'tasrotan.png'],
            ['title' => 'Celengan Ayam Lukis', 'price' => 'Rp 39.900', 'location' => 'Yogyakarta', 'rating' => '4.8', 'image' => 'celenganayam.png'],
            ['title' => 'Mainan Bayi Kayu Pahat', 'price' => 'Rp 25.900', 'location' => 'Solo', 'rating' => '4.7', 'image' => 'mainan.png'],
            ['title' => 'Buku Cerita Anak Ilustrasi', 'price' => 'Rp 47.800', 'location' => 'Pademangan', 'rating' => '4.9', 'image' => 'bukucerita.png'],
            ['title' => 'Gitar Akustik Custom', 'price' => 'Rp 800.000', 'location' => 'Jakarta Utara', 'rating' => '4.4', 'image' => 'gitar.png'],
            ['title' => 'Sarung Tangan Bayi Rajut', 'price' => 'Rp 34.600', 'location' => 'Jakarta Timur', 'rating' => '4.7', 'image' => 'sarungtangan.png'],
            ['title' => 'Bakul Nasi Kayu Anyam', 'price' => 'Rp 37.500', 'location' => 'Kalimantan Selatan', 'rating' => '4.5', 'image' => 'bakul.png'],
            ['title' => 'Set Peralatan Makan Kayu', 'price' => 'Rp 78.400', 'location' => 'Jambi', 'rating' => '4.6', 'image' => 'alatmakan.png'],
            ['title' => 'Ukiran Kayu Pajangan Mahogani', 'price' => 'Rp 90.300', 'location' => 'Bali', 'rating' => '4.3', 'image' => 'ukiran.png'],
            ['title' => 'Lukisan Penghias Dinding', 'price' => 'Rp 239.900', 'location' => 'Sulawesi Timur', 'rating' => '4.8', 'image' => 'lukisan.png'],
            ['title' => 'Mangkuk Keramik Abstrak', 'price' => 'Rp 84.100', 'location' => 'Ambon', 'rating' => '4.9', 'image' => 'mangkuk.png'],
            ['title' => 'Tas Backpack Pria', 'price' => 'Rp 138.000', 'location' => 'Bekasi', 'rating' => '4.2', 'image' => 'backpack.png'],
            ['title' => 'Boneka Amigurumi Rajut', 'price' => 'Rp 84.700', 'location' => 'Sumatera Utara', 'rating' => '4.7', 'image' => 'boneka.png'],
        ];

        return view('home', compact('data'));
    }

    public function displayDataExplore()
    {
        $data = [
            ['title' => 'Meja Lipat Kecil', 'price' => 'Rp 60.000', 'location' => 'Jawa Barat', 'rating' => '4.3', 'image' => 'mejalipat.png'],
            ['title' => 'Taplak Meja Rajut', 'price' => 'Rp 80.000', 'location' => 'Jakarta Pusat', 'rating' => '4.9', 'image' => 'taplak.png'],
            ['title' => 'Sapu Ijuk Gagang Kayu', 'price' => 'Rp 32.000', 'location' => 'Jawa Timur', 'rating' => '4.2', 'image' => 'sapu.png'],
            ['title' => 'Tas Belanja Anyam Rotan', 'price' => 'Rp 97.500', 'location' => 'Jawa Barat', 'rating' => '5', 'image' => 'tasrotan.png'],
            ['title' => 'Celengan Ayam Lukis', 'price' => 'Rp 39.900', 'location' => 'Yogyakarta', 'rating' => '4.8', 'image' => 'celenganayam.png'],
            ['title' => 'Mainan Bayi Kayu Pahat', 'price' => 'Rp 25.900', 'location' => 'Solo', 'rating' => '4.7', 'image' => 'mainan.png'],
            ['title' => 'Buku Cerita Anak Ilustrasi', 'price' => 'Rp 47.800', 'location' => 'Pademangan', 'rating' => '4.9', 'image' => 'bukucerita.png'],
            ['title' => 'Gitar Akustik Custom', 'price' => 'Rp 800.000', 'location' => 'Jakarta Utara', 'rating' => '4.4', 'image' => 'gitar.png'],
            ['title' => 'Sarung Tangan Bayi Rajut', 'price' => 'Rp 34.600', 'location' => 'Jakarta Timur', 'rating' => '4.7', 'image' => 'sarungtangan.png'],
            ['title' => 'Bakul Nasi Kayu Anyam', 'price' => 'Rp 37.500', 'location' => 'Kalimantan Selatan', 'rating' => '4.5', 'image' => 'bakul.png'],
            ['title' => 'Set Peralatan Makan Kayu', 'price' => 'Rp 78.400', 'location' => 'Jambi', 'rating' => '4.6', 'image' => 'alatmakan.png'],
            ['title' => 'Ukiran Kayu Pajangan Mahogani', 'price' => 'Rp 90.300', 'location' => 'Bali', 'rating' => '4.3', 'image' => 'ukiran.png'],
            ['title' => 'Lukisan Penghias Dinding', 'price' => 'Rp 239.900', 'location' => 'Sulawesi Timur', 'rating' => '4.8', 'image' => 'lukisan.png'],
            ['title' => 'Mangkuk Keramik Abstrak', 'price' => 'Rp 84.100', 'location' => 'Ambon', 'rating' => '4.9', 'image' => 'mangkuk.png'],
            ['title' => 'Tas Backpack Pria', 'price' => 'Rp 138.000', 'location' => 'Bekasi', 'rating' => '4.2', 'image' => 'backpack.png'],
            ['title' => 'Boneka Amigurumi Rajut', 'price' => 'Rp 84.700', 'location' => 'Sumatera Utara', 'rating' => '4.7', 'image' => 'boneka.png'],
        ];

        return view('explore', compact('data'));
    }
}
