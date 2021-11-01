<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //display the index at /companies
    public function index() {
        $address = "INVOKE address";
        $companies = Company::get();
        // query builder
        // type in url ?page=2
        $companies = Company::paginate(10);
        // dd($companies);

        return view('companies', 
        ["address"=> $address,
        "companies"=> $companies]);
        
    }

    // edit company details at /companies/{id}
    public function edit(Request $request) {
        // from the name in the form input
        $company = Company::where("id", $request->id)->first();
        // different approach bur still same as above
        $company = Company::whereId($request->id)->first();
        
        $status="";
        if(isset($request->name)){
            $company->name = $request->name;
            $company->save();
            $status = "Record $company->id updated";
            return redirect('companies/edit/'.$company->id)->with('status', $status);
        }
        
        return view('company.edit', [
            "company"=>$company
        ]
        )->with('status', $status);;
    }

    
}

// class StudentController {
//     public function store(Request $request) {
//         if (isset($request->name)) {
            
//         }
//     }
// }

// class StudentInsertController extends Controller
// {
//     public function create(Request $request){
//         $rules = [
// 			'student_ID' => 'required|string|max:10',
// 			'student_name' => 'required|string|min:3|max:255',
// 			'Address Line 1' => 'required|string|max:50',
//             'Address Line 2' => 'required|string|max:50',
//             'Street' => 'required|string|max:50',
//             'City' => 'required|string|max:50',
//             'Postcode' => 'required|string|max:10',
//             'State' => 'required|string|max:50'
// 		];
// 		$validator = Validator::make($request->all(),$rules);
// 		if ($validator->fails()) {
// 			return redirect('insert')
// 			->withInput()
// 			->withErrors($validator);
// 		}
// 		else{
//             $data = $request->input();
// 			try{
// 				$student = new StudInsert;
//                 $student->first_name = $data['first_name'];
//                 $student->last_name = $data['last_name'];
// 				$student->city_name = $data['city_name'];
// 				$student->email = $data['email'];
// 				$student->save();
// 				return redirect('insert')->with('status',"Insert successfully");
// 			}
// 			catch(Exception $e){
// 				return redirect('insert')->with('failed',"operation failed");
// 			}
// 		}
//     }
// }
