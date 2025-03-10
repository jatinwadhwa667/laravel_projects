<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;

class normalController extends Controller
{
    function homepage()
    {

        /**
         * 
         * 
         *  start query buliding queries 
         **/


        /** insert the data */
        // DB::table('users')->insert([

        //     'name' => 'aman singh',
        //     'email' =>'amansingh@gmauilo.com',
        //     'password' => 1234656789
        // ]);

        /** retrieving the all data */


        // $user = Db::table('users')->get();

        // return $user;


        /** retrieving the specfic user data */

        // $user = Db::table('users')->where('id' , 8)->first();

        // return $user;


        /** updating the  user data */

        // $user = Db::table('users')->where('id' , 8)->update([
        //     'name' =>'geetu gaba'
        // ]);

        // return $user;


        /** delete the user data */

        // $user = Db::table('users')->where('id', 8)->delete();

        // return $user;


        /** retrieving  the user specfic data cloumn */

        // $user = Db::table('users')->pluck('email' , 'id');

        // $user =


        /** aggregate function */

        /** 1. count */

        //    $user = DB::table('users')->count(); // count counbt the row

        //    dd($user);


        /** 2. min */

        //    $user = DB::table('users')->min('id'); // count counbt the row

        //    dd($user);


        /**  max , avg */


        /** Start Eloquent ORM   Important note: - without model not work*/


        /** retrieving all data*/
        // $user = User::get()->toArray();

        // dd($user);

        /** retrieving specfic user data*/

        // $user = User::where('id' , 16)->first();

        // dd($user);



        /** insert ser data*/

        // $user = new User;
        // $user->name = 'aman';
        // $user->email = 'amansharma@yopmail.com';
        // $user->password = 'amansharma@yopmail.com';
        // $user->save();
        // dd($user);


        /** updating the data */
        // $user = User::find(1); // This find case is used only when the table exists with an ID   and only id is entyer in find.
        // $user = User::where('id' , 1)->first();
        // $user->name = 'aman thakur';
        // $user->email = 'amanthakur@gmaiol.com';
        // $user->password = 'amanthakur@gmaiol.com';
        // $user->save();


        /** deleting the data */
        // User::where('id', 1)->delete();

        // User::findorFail(1)->delete();  // way for using the find


        return view('home');
    }
}
