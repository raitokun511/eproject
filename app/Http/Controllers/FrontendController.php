<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }
    public function cart()
    {
        return view('Frontend.pages.cart');
    }

    public function single()
    {
        return view('Frontend.pages.single');
    }
    public function detail()
    {
        return view('Frontend.pages.detail');
    }
    public function detailcar(Request $request)
    {
        switch ($request->id) {
            case 1:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "SWIFT",
                            "prices" => "23694.46",
                            "img1" => "assets/images/suzuki/suzuki05.jpg",
                            "img2" => "assets/images/suzuki/suzuki06.jpg",
                            "img3" => "assets/images/suzuki/suzuki07.jpg",
                            "img4" => "assets/images/suzuki/suzuki08.jpg",
                            "brand" => "Suzuki",
                            "info" => "You won't be able to resist the urge to start the car right away, thanks to the meticulously executed \"driver-oriented\" design. Like a race car, with a D-shaped steering wheel, occupant-hugging front seats and a center console tilted towards the driver, creating a higher-quality, sportier driving space, like a single block. agreement between the vehicle and the driver."
                        ]);
              break;
            case 2:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Suzuki Ciaz 2022",
                            "prices" => "22848.08",
                            "img1" => "assets/images/home-03/suzuki1.png",
                            "img2" => "assets/images/home-03/suzuki2.png",
                            "img3" => "assets/images/home-03/suzuki3.png",
                            "img4" => "assets/images/home-03/suzuki4.png",
                            "brand" => "Suzuki",
                            "info" => "Hyundai Grand i10 Hatchback owns the largest size in the segment, the overall length has been upgraded compared to its predecessor (DxRxC) to provide a maximum comfortable space as well as a dynamic style for the owner. Besides, the leading technologies equipped on the car make the driving experience even more enjoyable.
                            Suzuki Ciaz – Classy sedan is the perfect combination of class and luxury. Ciaz with innovation at its core, elegant on the outside, spacious on the inside. More than just a car, the Ciaz is a pure luxury sedan that inspires change by creating unforgettable experiences."
                        ]);
              break;
            case 3:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Suzuki Ertiga Hybrid Sport Limited 2023",
                "prices" => "73648.08",
                "img1" => "assets/images/suzuki/suzuki12.jpg",
                "img2" => "assets/images/suzuki/suzuki09.jpg",
                "img3" => "assets/images/suzuki/suzuki10.jpg",
                "img4" => "assets/images/suzuki/suzuki11.jpg",
                "brand" => "Suzuki",
                "info" => "The Suzuki Ertiga Hybrid is one of the most fuel-efficient and fuel-efficient MPV models on the market today. With modern design, full utility features and reasonable price, Suzuki Ertiga Hybrid is highly appreciated and favored by Vietnamese consumers. This is the most fuel-efficient 7-seater car in the segment"
            ]);
              break;
            case 4:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Huyndai Grand i10 Nios",
                "prices" => "22848.08",
                "img1" => "assets/images/huyndai/huyndai09.jpg",
                "img2" => "assets/images/huyndai/huyndai10.jpg",
                "img3" => "assets/images/huyndai/huyndai11.jpg",
                "img4" => "assets/images/huyndai/huyndai12.jpg",
                "brand" => "Huyndai",
                "info" => "Hyundai Grand i10 Hatchback owns the largest size in the segment, the overall length has been upgraded compared to its predecessor (DxRxC) to provide a maximum comfortable space as well as a dynamic style for the owner. Besides, the leading technologies equipped on the car make the driving experience even more enjoyable."
            ]);
              break;
              case 5:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Huyndai Santafe",
                "prices" => "22848.08",
                "img1" => "assets/images/huyndai/huyndai05.jpg",
                "img2" => "assets/images/huyndai/huyndai06.jpg",
                "img3" => "assets/images/huyndai/huyndai07.jpg",
                "img4" => "assets/images/huyndai/huyndai07.jpg",
                "brand" => "Huyndai",
                "info" => "Aromatherapy essential oils, Car wipes, Real interior cleaning spray, Neck pillow, Leather file wallet, Specialized medical bag, Taplo carpet...... And many other attractive accessories"
            ]);
              break;
              case 6:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Huyndai Creta 2022",
                "prices" => "22848.08",
                "img1" => "assets/images/huyndai/huyndai01.jpg",
                "img2" => "assets/images/huyndai/huyndai02.jpg",
                "img3" => "assets/images/huyndai/huyndai03.jpg",
                "img4" => "assets/images/huyndai/huyndai02.jpg",
                "brand" => "Huyndai",
                "info" => "Hyundai Creta is considered one of the most serious competitors compared to other cars in the same segment. As a newly launched small SUV, Hyundai Creta brings outstanding advantages such as: powerful, durable and fuel-efficient, attracting customers at first sight."
            ]);
              break;
              case 7:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "911 Carerra",
                "prices" => "22848.08",
                "img1" => "assets/images/porsche/porsche01.jpg",
                "img2" => "assets/images/porsche/porsche02.jpg",
                "img3" => "assets/images/porsche/porsche03.jpg",
                "img4" => "assets/images/porsche/porsche01.jpg",
                "brand" => "Porsche",
                "info" => "For Panamera, Cayenne, Macan and Taycan models, the standard price includes a 4-year maintenance service package."
            ]);
              break;
              case 8:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Panamera Platinum Edition",
                "prices" => "22848.08",
                "img1" => "assets/images/porsche/porsche05.jpg",
                "img2" => "assets/images/porsche/porsche06.jpg",
                "img3" => "assets/images/porsche/porsche07.jpg",
                "img4" => "assets/images/porsche/porsche01.jpg",
                "brand" => "Porsche",
                "info" => "The standard price Macan and Taycan include a 4-year service package. Prices, specifications and images are subject to change from time to time without notice."
            ]);
              break;
              case 9:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "718 Boxster Style Edition",
                "prices" => "22848.08",
                "img1" => "assets/images/porsche/porsche09.jpg",
                "img2" => "assets/images/porsche/porsche10.jpg",
                "img3" => "assets/images/porsche/porsche11.jpg",
                "img4" => "assets/images/porsche/porsche01.jpg",
                "brand" => "Porsche",
                "info" => "For Panamera, Cayenne, Macan and Taycan models, the standard price includes a 4-year maintenance service package."
            ]);
              break;
            case 10:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "S-Class 2023 PH",
                "prices" => "22848.08",
                "img1" => "assets/images/mercedes/mercedes01.jpg",
                "img2" => "assets/images/mercedes/mercedes02.jpg",
                "img3" => "assets/images/mercedes/mercedes03.jpg",
                "img4" => "assets/images/mercedes/mercedes01.jpg",
                "brand" => "Mercedes",
                "info" => "This is the all-new S-class, Mercedes-Benz brings its flagship sedan into the 2020s. While its design is unmistakably an S-class, it is much sleeker than the model it replaces. Inside, it features a futuristic interior with multiple touchscreens including a tablet in the armrest, and a pair of 11.6-inch touchscreen displays for the rear passengers. "
            ]);
            break;
            case 11:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Mercedes-Maybach S650 Pullman 2019",
                "prices" => "22848.08",
                "img1" => "assets/images/mercedes/mercedes05.jpg",
                "img2" => "assets/images/mercedes/mercedes06.jpg",
                "img3" => "assets/images/mercedes/mercedes07.jpg",
                "img4" => "assets/images/mercedes/mercedes05.jpg",
                "brand" => "Mercedes",
                "info" => "Featuring strong technical characteristics, Mercedes-Maybach vehicles are perfect candidates for armoring modifications and conversions. With very subtle changes to its maneuverability and speed performance, the vehicle is armored up to CEN BR7 ballistic rating which effectively shields it from 7.62mm high-power rifle fire. Furthermore, the vehicle’s capsule can withstand the blast of two DM51 hand grenades detonated simultaneously. Additional components such as the battery and ECU(s) are reinforced and armored as well to provide additional protection. INKAS® is presently armoring both the Mercedes-Maybach S 560 4Matic Sedan as well as the Mercedes-Maybach S 650 Sedan."
            ]);
            break;
            case 12:
                return view('Frontend.pages.cars.detail_car_1', ["name"=> "Mercedes S550",
                "prices" => "22848.08",
                "img1" => "assets/images/mercedes/mercedes09.jpg",
                "img2" => "assets/images/mercedes/mercedes10.jpg",
                "img3" => "assets/images/mercedes/mercedes11.jpg",
                "img4" => "assets/images/mercedes/mercedes10.jpg",
                "brand" => "Mercedes",
                "info" => "With every year, an S-Class represents not just the pinnacle of the automobile but the forefront. It's thoughtful of its passengers. Keenly in tune with its driver. Highly protective of those within or even near its elegant presence. Everything that matters most to you, matters more than ever to the S-Class."
            ]);
            break;
            default:
            return view('Frontend.pages.cars.detail_car_1');
          }
    }
}
