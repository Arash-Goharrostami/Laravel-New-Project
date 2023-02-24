<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search()
    {
        $value = $_POST['value'];

        // dd($value);
    // $test = new TestModel();
    // $result = $test->getData($id);

    // foreach($result as $row)
    // {
    //     $html =
    //           '<tr>
    //              <td>' . $row->name . '</td>' .
    //              '<td>' . $row->address . '</td>' .
    //              '<td>' . $row->age . '</td>' .
    //           '</tr>';
    // }
    // return $html;
    return $value;
    }
}
