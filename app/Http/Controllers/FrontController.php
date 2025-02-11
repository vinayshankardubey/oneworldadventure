<?php

namespace App\Http\Controllers;

use App\Models\FrontModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($pagename,$data)
    {
        return view($pagename,$data);
    }
    public function home(){
        $pagename="front.pages.home";
        $data['title']="Home";
        return $this->index($pagename,$data);
    }
    
    public function turist_1(){
        $pagename="front.pages.turist.turist_list_1";
        $data['title']="Turist 1";
        return $this->index($pagename,$data);      
    }
    public function turist_2(){
        $pagename="front.pages.turist.turist_list_2";
        $data['title']="Turist 2";
        return $this->index($pagename,$data);
    }
    // public function turist_3(){
    //     $pagename="front.pages.turist.turist_list_3";
    //     $data['title']="Turist 3";
    //     return $this->index($pagename,$data);
    // }public function turist_4(){
    //     $pagename="front.pages.turist.turist_list_4";
    //     $data['title']="Turist 4";
    //     return $this->index($pagename,$data);
    // }public function turist_5(){
    //     $pagename="front.pages.turist.turist_list_5";
    //     $data['title']="Turist 5";
    //     return $this->index($pagename,$data);
    // }public function turist_6(){
    //     $pagename="front.pages.turist.turist_list_6";
    //     $data['title']="Turist 6";
    //     return $this->index($pagename,$data);
    // }public function turist_7(){
    //     $pagename="front.pages.turist.turist_list_7";
    //     $data['title']="Turist 7";
    //     return $this->index($pagename,$data);
    // }public function turist_8(){
    //     $pagename="front.pages.turist.turist_list_8";
    //     $data['title']="Turist 8";
    //     return $this->index($pagename,$data);
    // }public function turist_9(){
    //     $pagename="front.pages.turist.turist_list_9";
    //     $data['title']="Turist 9";
    //     return $this->index($pagename,$data);
    // }public function turist_10(){
    //     $pagename="front.pages.turist.turist_list_10";
    //     $data['title']="Turist 10";
    //     return $this->index($pagename,$data);
    // }
    public function tour_single(){
             $pagename="front.pages.turist.tour_single";
            $data['title']="Turist 10";
            return $this->index($pagename,$data);
    }
    public function   booking_pages(){
        $pagename="front.pages.turist.booking_pages"; 
       $data['title']="booking pages";
       return $this->index($pagename,$data);
    }   
    
    public function   destinations(){
        $pagename="front.pages.turist.destinations"; 
       $data['title']="destinations";
       return $this->index($pagename,$data);
    }
    public function contact(){
        $pagename="front.pages.contact"; 
       $data['title']="Contact";
       return $this->index($pagename,$data);

    } 
    public function register(){
        $pagename="front.pages.register"; 
       $data['title']="Register";
       return $this->index($pagename,$data);

    } 
    public function login(){
        $pagename="front.pages.login"; 
       $data['title']="Login";
       return $this->index($pagename,$data);

    }   
    public function db_profile(){
        $pagename="front.pages.db_profile"; 
       $data['title']="Profile";
       return $this->index($pagename,$data);

    }
    public function db_messages(){
        $pagename="front.pages.db_messages"; 
       $data['title']="Message";
       return $this->index($pagename,$data);

    }
    public function db_add_tour(){
        $pagename="front.pages.db_add_tour"; 
       $data['title']="Add Tour";
       return $this->index($pagename,$data);

    }
    public function db_favorites(){
        $pagename="front.pages.db_favorites"; 
       $data['title']="Favorites";
       return $this->index($pagename,$data);

    }
    public function db_listing(){
        $pagename="front.pages.db_listing"; 
       $data['title']="listing";
       return $this->index($pagename,$data);

    }
    public function db_booking(){
        $pagename="front.pages.db_booking"; 
       $data['title']="Booking";
       return $this->index($pagename,$data);

    }
    public function db_main(){
        $pagename="front.pages.db_main"; 
       $data['title']="Dashboard";
       return $this->index($pagename,$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FrontModel $frontModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FrontModel $frontModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FrontModel $frontModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FrontModel $frontModel)
    {
        //
    }
}
