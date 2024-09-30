<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\FooterGridTwoDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterGridTwo;
use App\Models\FooterTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FooterGridTwoController extends Controller
{
    /**
     * Display a listing of the footer-grid-two.
     */
    public function index(FooterGridTwoDataTable $dataTable)
    {
        $footerTitle = FooterTitle::first();
        return $dataTable->render('admin.footer.footer-grid-two.index', compact('footerTitle'));
    }

    /**
     * Show the form for creating a new footer-grid-two.
     */
    public function create()
    {
        return view('admin.footer.footer-grid-two.create');
    }

    /**
     * Store a newly created footer-grid-two in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'url' => ['required', 'url'],
            'status' => ['required']
        ]);

        $footer = new FooterGridTwo();
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        Cache::forget('footer_grid_two');

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.footer-grid-two.index');
    }

    /**
     * Show the form for editing the specified footer-grid-two.
     */
    public function edit(string $id)
    {
        $footer = FooterGridTwo::findOrFail($id);
        return view('admin.footer.footer-grid-two.edit', compact('footer'));
    }

    /**
     * Update the specified footer-grid-two in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'url' => ['required', 'url'],
            'status' => ['required']
        ]);

        $footer = FooterGridTwo::findOrFail($id);
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        Cache::forget('footer_grid_two');

        toastr('Update Successfully!', 'success');

        return redirect()->route('admin.footer-grid-two.index');
    }

    /**
     * Remove the specified footer-grid-two from storage.
     */
    public function destroy(string $id)
    {
        $footer = FooterGridTwo::findOrFail($id);
        $footer->delete();
        Cache::forget('footer_grid_two');

        return response(['status' => 'success', 'message' => 'Deleted successfully!']);
    }

    public function change_status(Request $request)
    {

        $footer = FooterGridTwo::findOrFail($request->id);
        $footer->status = $request->status == 'true' ? 1 : 0;
        $footer->save();

        Cache::forget('footer_grid_two');

        return response(['message' => 'Status has been updated!']);
    }

    public function change_title(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        FooterTitle::updateOrCreate(
            ['id' => 1],
            ['footer_grid_two_title' => $request->title]
        );

        toastr('Updated Successfully', 'success');

        return redirect()->back();
    }
}
