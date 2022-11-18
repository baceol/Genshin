<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Element;
use Illuminate\Http\Request;

class CharacterController extends Controller {
    public function show() {
        $elements = Element::all();

        return view("character", compact('elements'));
    }

    public function search(Request $request) {
        if ($request->ajax()) {
            $element = $request->get('element');
            $array = array();
            $output = '';

            if ($element != '') {
                $characters = Character::all()->where("element_id", "=", $element);

                foreach ($characters as $character) {
                    $element = Character::find($character->id)->element;
                    $WeaponType = Character::find($character->id)->WeaponType;
                    array_push($array, array($character, $element, $WeaponType));
                }
            } else {
                $characters = Character::all();

                foreach ($characters as $character) {
                    $element = Character::find($character->id)->element;
                    $WeaponType = Character::find($character->id)->WeaponType;
                    array_push($array, array($character, $element, $WeaponType));
                }
            }

            if (sizeof($array) > 0) {
                foreach ($array as $data) {
                    $output .= '
                    <tr style="background-color: '. $data[1]->color .'">
                        <td>'. $data[0]->name .'</td>
                        <td><img src="'. $data[0]->storage .'" alt=""></td>
                        <td title="'. $data[1]->name .'"><img src="'. $data[1]->storage .'" alt=""></td>
                        <td title="'. $data[2]->name .'"><img src="'. $data[2]->storage .'" alt=""></td>
                        <td>'. $data[0]->nationality .'</td>
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
