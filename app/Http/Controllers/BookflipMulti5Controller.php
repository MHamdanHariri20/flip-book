<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bookflip5;
class BookflipMulti5Controller extends Controller
{
    public function index() 
    {
        $book = Bookflip5::all();
        return view("welcome", compact('book'));
    }

    public function create5()
    {
        return view("actions.create5");
    }

    public function store5(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.subject' => '',
            'addMoreInputFields.*.text' => '',
            'addMoreInputFields.*.image' => '',
            'addMoreInputFields.*.link' => ''
        ]);


    $files = $request->file('addMoreInputFields.*.image');
    if (!empty($files)) {
        foreach ($files as $key => $file) {
            if ($file !== null) {
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $newFilename = pathinfo($filename, PATHINFO_FILENAME) . '.' . $extension;
                $path = $file->storeAs('images/', $newFilename, 'public');
            }else{}
        }
    } else {}
        foreach ($request->addMoreInputFields as $key => $value) {
            $image = $request->file('addMoreInputFields.' . $key . '.image');
          if ($image !== null) {
            $imageName = $image->getClientOriginalName();
            $image->storeAs('images/', $imageName);
            $value['image'] = $imageName;
          }else{

          }
            Bookflip5::create($value);
        }
        return redirect()->route('flipbookAdmin5');
    }


    public function edit5(Bookflip5 $bookflip)
    {
        return view('actions.edit5', compact('bookflip'));
    }

    public function update5(Request $request, Bookflip5 $bookflip)
    {

        $request->validate([
            'subject' => '',
            'text' => '',
            'image' => '',
            'link' => ''
        ]);

        $input = $request->all();
        $image = $request->file('image');
        if ($image !== null) {
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $input['image'] = $imageName;
        }else{
            $input['image'] = null;
        }

        $bookflip->update($input);
        $bookflip->save();
        return redirect()->route('flipbookAdmin5'); 
    }

    public function delete5(Request $request)
    {
        $selectedItems = $request->input('items');
        
        if (empty($selectedItems)) {
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            Bookflip5::whereIn('id', $selectedItems)->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        }
    }
}