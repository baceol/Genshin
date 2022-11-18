<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Models\WeaponType;
use Illuminate\Http\Request;

class WeaponController extends Controller {
    public function show() {
        $WeaponType = WeaponType::all();

        return view("weapon", compact('WeaponType'));
    }

    public function search(Request $request) {
        if ($request->ajax()) {
            $WeaponType = $request->get('WeaponType');
            $array = array();
            $output = '';

            if ($WeaponType != '') {
                $weapons = Weapon::all()->where("weapon_type_id", "=", $WeaponType);

                foreach ($weapons as $weapon) {
                    $WeaponType = Weapon::find($weapon->id)->WeaponType;
                    array_push($array, array($weapon, $WeaponType));
                }
            } else {
                $weapons = Weapon::all();

                foreach ($weapons as $weapon) {
                    $WeaponType = Weapon::find($weapon->id)->WeaponType;
                    array_push($array, array($weapon, $WeaponType));
                }
            }

            if (sizeof($array) > 0) {
                foreach ($array as $data) {
                    $output .= '
                    <tr>
                        <td>'. $data[0]->name .'</td>
                        <td><img src="'. $data[0]->storage .'" alt=""></td>
                        <td title="'. $data[1]->name .'"><img src="'. $data[1]->storage .'" alt=""></td>
                        <td>持ってる</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td>No Data Found</td>
                </tr>
                ';
            }
            $data = array('tableData' => $output);

            echo json_encode($data);
        }
    }
}
