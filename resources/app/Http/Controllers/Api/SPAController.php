<?php

namespace App\Http\Controllers\Api;

use App\Info;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SPAController extends Controller
{
    public function Time()
    {
        $iran = Carbon::now()->timezone('Asia/Tehran')->format('H:i');
        $america = Carbon::now()->timezone('America/New_York')->format('H:i');
        $london = Carbon::now()->timezone('Europe/London')->format('H:i');
        $tokyo = Carbon::now()->timezone('Asia/Tokyo')->format('H:i');
        $hongkong = Carbon::now()->timezone('Asia/Hong_Kong')->format('H:i');
        $berlin = Carbon::now()->timezone('Europe/Berlin')->format('H:i');

        return ['iran' => $iran, 'america' => $america, 'london' => $london, 'tokyo' => $tokyo, 'hongkong' => $hongkong, 'berlin' => $berlin];
    }

    public function Coin(Info $info, $id)
    {
        return $info->where('slug', $id)->first();
    }

    public function search(Info $info, $value)
    {
        return $info->where('slug', 'LIKE', '%' . $value . '%')->get();
    }

    public function exchange($input, $dollar, $euro, $pound)
    {
        $int1 = str_replace([',', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '/', '-', '*', '+', ';', ':', '_', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'], '', $input);
        $dollar = str_replace(',', '', $dollar);
        $euro = str_replace(',', '', $euro);
        $pound = str_replace(',', '', $pound);
        return ['inta' => $int1, 'dollar' => $dollar, 'euro' => $euro, 'pound' => $pound];
    }

    public function slm()
    {
        $res = file_get_contents('https://www.megaweb.ir/api/money');
        return $res;
    }

    public function Fiat()
    {
        $fiat = file_get_contents('http://www.tgju.info/call.php?format=json&t=724365&token=bcdtnw711yl91yni1rfvr11uf8rsyrm93z3rwasx9d6bbutdl9');
//        $fiat = file_get_contents('https://api.tgju.online/v1/data/sana/json');

        return $fiat;
    }

    public function Fiaat($pound)
    {
        return $res = array_keys($pound, '0', '1');
        /*foreach ($res as $key => $value) {
            return $key . $value;
        }*/
    }
}
