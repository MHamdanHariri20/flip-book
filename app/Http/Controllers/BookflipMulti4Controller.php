<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bookflip4;
class BookflipMulti4Controller extends Controller
{
    public function index() 
    {
        $book = Bookflip4::all();
        return view("welcome", compact('book'));
    }

    public function create4()
    {
        return view("actions.create4");
    }

    public function store4(Request $request)
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
            Bookflip4::create($value);
        }
        return redirect()->route('flipbookAdmin4');
    }


    public function edit4(Bookflip4 $bookflip)
    {
        return view('actions.edit4', compact('bookflip'));
    }

    public function update4(Request $request, Bookflip4 $bookflip)
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
        return redirect()->route('flipbookAdmin4'); 
    }

    public function delete4(Request $request)
    {
        $selectedItems = $request->input('items');
        
        if (empty($selectedItems)) {
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            Bookflip4::whereIn('id', $selectedItems)->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        }
    }

}