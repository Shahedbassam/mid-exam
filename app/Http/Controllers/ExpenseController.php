<?php
namespace App\Http\Controllers;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        $expenses= Expense::all();
        return view('expenses', compact('expenses'));
    }
    public function create(){
        return view('create_expenses');
    }
    public function store(Request $request){
        $expenses = new Expense;
        $expenses->name = $request->name;
        $expenses->amount = $request->amount;
        $expenses->date = $request->date;
        $expenses->category = $request->category;
        $expenses->save();
        return redirect()->back();
        }
        public function delete($id){
            $expenses = Expense::find($id)->delete();
            return redirect()->back();

        }
        public function edit($id){
            $expenses = Expense::find($id);
            $expenses = Expense::all();
            return view('edit', compact('Expense', 'expenses'));
           }
        public function update (Request $request, $id){
            $expenses = Expense::all()->sortBy('name');
            $expenses = Expense::find($id);
        $expenses->name = $request->name;
        $expenses->amount = $request->amount;
        $expenses->date = $request->date;
        $expenses->category = $request->category;
        $expenses->save();
                   return redirect('/');

           }
}
