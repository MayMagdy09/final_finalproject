@extends('resturant.app')
@section('content')
    <h1 class="display-3 font-weight-bold text-center">  Our History</h1>
    <div class="row">
        <div class="col-md-12">
    <img class="img-fluid" src="{{asset("imgs/history.jpg")}}">
</div>
<div class="col-md-10 mt-5">
 <h4> From drive-thru restaurants to Chicken McNuggets to college credits from Hamburger U, we’ve had quite a
      journey. And we’re still going. But to take a look into our past, we need to share the story of one man.</h4>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">The Ray Kroc Story</h1>
    <h5>How do you create a restaurant business and become an overnight success at the age of 52? As Ray Kroc said, “I was an overnight success alright, but 30 years is a long, long night.”</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold"> Origins</h1>
    <h5>In 1917, 15-year-old Ray Kroc lied about his age to join the Red Cross as an ambulance driver, but the war ended before he completed his training. He then worked as a piano player, a paper cup salesman and a Multimixer salesman. In 1954, he visited a restaurant in San Bernardino, California that had purchased several Multimixers. There he found a small but successful restaurant run by brothers Dick and Mac McDonald, and was stunned by the effectiveness of their operation. The McDonald’s brothers produced a limited menu, concentrating on just a few items – burgers, fries and beverages – which allowed them to focus on quality and quick service.

        They were looking for a new franchising agent and Kroc saw an opportunity. In 1955, he founded McDonald’s System, Inc., a predecessor of the McDonald’s Corporation, and six years later bought the exclusive rights to the McDonald’s name and operating system. By 1958, McDonald’s had sold its 100 millionth hamburger.</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">A Unique Philosophy
    </h1>
<h5>Ray Kroc wanted to build a restaurant system that would be famous for providing food of consistently high quality and uniform methods of preparation. He wanted to serve burgers, fries and beverages that tasted just the same in Alaska as they did in Alabama.

    To achieve this, he chose a unique path: persuading both franchisees and suppliers to buy into his vision, working not for McDonald’s but for themselves, together with McDonald’s. He promoted the slogan, “In business for yourself, but not by yourself.” His philosophy was based on the simple principle of a 3-legged stool: one leg was McDonald’s franchisees; the second, McDonald’s suppliers; and the third, McDonald’s employees. The stool was only as strong as the three legs that formed its foundation.
    
     
    
    “If I had a brick for every time I’ve repeated the phrase Quality, Service, Cleanliness and Value, I think I’d probably be able to bridge the Atlantic Ocean with them.” – Ray Kroc</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">System First
    </h1>
<h5>First and foremost, Kroc advocated adherence to the system approach. So while many of McDonald’s most famous menu items – like the Filet-O-Fish, Big Mac, and Egg McMuffin – were created by franchisees, the McDonald’s operating system required franchisees to follow the core McDonald’s principles of quality, service, cleanliness and value.</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">The Roots of Quality
    </h1>
<h5>McDonald’s passion for quality meant that ingredients were tested, tasted and perfected to fit the operating system. Kroc shared his vision of McDonald’s future, selling his early suppliers on future volumes. They believed in him and the restaurant boomed.

    Again, Ray Kroc was looking for a partnership, and he managed to create the most integrated, efficient and innovative supply system in the food service industry. These supplier relationships have flourished over the decades. In fact, many McDonald’s suppliers operating today first started business with a handshake from Ray Kroc</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">Hamburger University
    </h1>
<h5>In 1961, Kroc launched a training program, later called Hamburger University, at a new McDonald’s restaurant in Elk Grove Village, Illinois. There, franchisees were trained on the proper methods for running a successful McDonald’s restaurant. Hamburger U utilized a research and development laboratory in nearby Addison, Illinois to develop new cooking, freezing, storing and serving methods. Today, more than 275,000 franchisees, managers, and employees have graduated from the program.</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">The Legend Lives On
    </h1>
<h5>Right up until he died on January 14, 1984, Ray Kroc never stopped working for McDonald’s. His legacy continues to this day, providing McDonald’s customers with great tasting, affordable food; crew and franchisees with opportunities for growth; and suppliers with a shared commitment to provide the highest quality ingredients and products.

    From his passion for innovation and efficiency, to his relentless pursuit of quality, to his many charitable contributions, Ray Kroc’s legacy continues to be an inspirational and integral part of McDonald’s – today and into the future</h5>
</div>
<div class="col-md-10 mt-5">
    <h1 class="font-weight-bold">One Milestone At A Time
    </h1>
<h5>From the first drive-thru to the first Chicken McNuggets, we’ve had a lot of memorable milestones. For a snapshot of our accomplishments, take a look at our interactive History Timeline.</h5>
</div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset("imgs/history1.jpg")}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-weight-bold">Leadership Team                </h5>
                  <p class="card-text text-center">Ray Kroc left a legacy. Our executives preserve it.</p>
                  <a href="/Leadership" class="btn btn-warning mt-5">Learn More</a>
                </div>
              </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset("imgs/history2.jpg")}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-weight-bold">Values in Action
                </h5>
                  <p class="card-text text-center">Find a listing of jobs at our Corporate or Regional offices near you.</p>
                  <a href="#" class="btn btn-warning mt-5">Learn More</a>
                </div>
              </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset("imgs/history3.jpg")}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-weight-bold">Careers Beyond the Restaurant</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-warning mt-2 text-center">Learn More</a>
                </div>
              </div>
    </div>
    </div>
</div>
@endsection