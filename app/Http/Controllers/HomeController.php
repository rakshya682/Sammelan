<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\addEvent;

use App\Models\ticket;
use App\Models\ordeer;

use RealRashid\SweetAlert\Facades\Alert;


use Session;
use Stripe;


class HomeController extends Controller
{
    public function index(){
        $event=addEvent::where('status',1)->paginate(6);
        // $event=addEvent::paginate(10);
        return view('home.userpage',compact('event'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view ('admin.home');
        }

        else
        {
            $event=addEvent::paginate(10);
            return view('home.userpage',compact('event'));
        }
        }
        public function event_details($id)
        {
            $event=addEvent::find($id);
            return view('home.event_details',compact('event'));
        }
        public function get_tickets( Request $request, $id)
        {
            if(Auth::id())
            {
                $user=Auth::user();

                $event=addEvent::find($id);

               

                $ticket=new ticket;
                $ticket->name=$user->name;
                $ticket->email=$user->email;
                $ticket->phone=$user->phone;
                $ticket->user_id=$user->id;


                $ticket->event_name=$event->event_name;
                $ticket->price=$event->price;
                $ticket->image=$event->image;
                $ticket->event_id=$event->id;
                $ticket->quantity=$request->quantity;

                $ticket->save();

                Alert::success('Get Ticket Successfully','we have added ticket to the My ticket');
                
                return redirect()->back();
                
            }
            else{
                return redirect('login');
            }
        }
        public function show_tickets()
        {
            if(Auth::id())
            {
                $id=Auth::user()->id;

                $ticket=ticket::where('user_id','=',$id)->get();
    
                return view('home.showtickets',compact('ticket'));
            }
           
                else{
                    return redirect('login');
                }
        }
        public function remove_tickets($id)
        {
            $ticket=ticket::find($id);

            $ticket->delete();
            
            return redirect()->back();
        }
        public function stripe($totalprice)
        {
            return view('home.stripe',compact('totalprice'));
        }

        public function stripePost(Request $request, $totalprice)       
        {
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create([
        "amount" => $totalprice * 100,
        "currency" => "usd",
        "source" => $request->stripeToken,
        "description" => "Thank You for the Payment."
        ]);

        
            $user = Auth::user();
            $userid = $user->id;
            $data = ticket::where('user_id', '=', $userid)->get();
        
            foreach ($data as $ticket) {
                $ordeer = new ordeer;
                $ordeer->name = $ticket->name;
                $ordeer->email = $ticket->email;
                $ordeer->phone = $ticket->phone;
                $ordeer->user_id = $ticket->user_id;
                $ordeer->event_name = $ticket->event_name;
                $ordeer->quantity = $ticket->quantity;
                $ordeer->price = $ticket->price;
                $ordeer->image = $ticket->image;
                $ordeer->event_id = $ticket->event_id;
                $ordeer->payment_status = "paid";
                $ordeer->save();


        
                $ticket_id = $ticket->id;

                $ticket=ticket::find($ticket_id);
                $ticket->delete();
            }
        
        
        
        

    Session::flash('success', 'Payment successful!');

    return back();
}
        

        public function event()

        {
            $event=addEvent::where('status',1)->paginate(10);
            // $event=addEvent::paginate(10);
            
            return view('home.all_event',compact('event'));
        }
        public function event_search(Request $request)
        {
            $search_text=$request->search;
            $event=addEvent::where('event_name','LIKE',"%$search_text%")->paginate(6);
            return view('home.userpage',compact('event'));
        }
        public function search_event(Request $request)
        {
            $search_text=$request->search;
            $event=addEvent::where('event_name','LIKE',"%$search_text%")->paginate(6);
            return view('home.all_event',compact('event'));
        }
    }

