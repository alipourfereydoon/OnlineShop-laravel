<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrders(){
        return view('admin.market.oreder.index');
    }

        public function sending(){
        return view('admin.market.oreder.index');
    }

        public function unpaid(){
        return view('admin.market.oreder.index');
    }

        public function canceled(){
        return view('admin.market.oreder.index');
    }

        public function returned(){
        return view('admin.market.oreder.index');
    }

    public function all(){
        return view('admin.market.oreder.index');
    }

        public function show(){
        return view('admin.market.oreder.index');
    }

        public function changeSendStatus(){
        return view('admin.market.oreder.index');
    }

        public function changeOrderStatus(){
        return view('admin.market.oreder.index');
    }

    public function cancelOrder(){
        return view('admin.market.oreder.index');
    }
}
