<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\HotelModel;
use App\Models\RoomModel;


class HomeController extends Controller {
    public function index() {
        // Load models
        $hotelModel = new HotelModel();
        $roomModel = new RoomModel();

        // Fetch data
        $allHotels = $hotelModel->getActiveHotels();
        $allRooms = $roomModel->getActiveRooms();

        // Pass data to the view
        $this->view('home/index', [
            'allHotels' => $allHotels,
            'allRooms' => $allRooms
        ]);
    }
}