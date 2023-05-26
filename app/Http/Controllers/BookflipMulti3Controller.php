<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bookflip3;
class BookflipMulti3Controller extends Controller
{
    public function index() 
    {
        $book = Bookflip3::all();
        return view("welcome", compact('book'));
    }

    public function create3()
    {
        return view("actions.create3");
    }

    public function store3(Request $request)
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
            Bookflip3::create($value);
        }
        return redirect()->route('flipbookAdmin3');
    }


    public function edit3(Bookflip3 $bookflip)
    {
        return view('actions.edit3', compact('bookflip'));
    }

    public function update3(Request $request, Bookflip3 $bookflip)
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
        return redirect()->route('flipbookAdmin3'); 
    }

    public function delete3(Request $request)
    {
        $selectedItems = $request->input('items');
        
        if (empty($selectedItems)) {
            // Tampilkan alert jika tidak ada ID yang dipilih
            echo "<script>alert('Pilih setidaknya satu item untuk dihapus.'); window.location.href = '/dashboard/admin/flipbook3';</script>";
        } else {
            Bookflip3::whereIn('id', $selectedItems)->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        }
    }



}