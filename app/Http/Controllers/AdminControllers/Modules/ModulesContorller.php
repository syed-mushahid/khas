<?php

namespace App\Http\Controllers\AdminControllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Modules;
use App\Models\SubModules;
use Illuminate\Http\Request;

class ModulesContorller extends Controller
{

    public function addModules($id = null)
    {
        $module = null;
        if (!empty($id)) {

            $module = Modules::find($id);
        }
        return view('AdminViews.Modules.add_modules', compact('module'));

    }
    public function modulesList()
    {
        $modules = Modules::all()->sortByDesc('id');

        return view('AdminViews.Modules.modules_list', compact('modules'));
    }

    public function createModule(Request $request, $id = null)
    {
        // Validate input data
        $validatedData = $request->validate([
            'module_name' => 'required|max:255',
            'module_icon' => 'nullable|max:255',
            'module_route' => 'nullable|max:255',
            'module_disabled' => 'required',
            'sub_module_name.*' => 'nullable|max:255',
            'sub_module_icon.*' => 'nullable|max:255',
            'sub_module_route.*' => 'nullable|max:255',
            'sub_module_disabled.*' => 'required',
            'sub_module_id' => 'nullable',
        ]);

        $module = Modules::updateOrCreate(
            ['id' => $id],
            [
                'module_name' => $validatedData['module_name'],
                'icon' => $validatedData['module_icon'],
                'module_route' => $validatedData['module_route'],
                'disabled' => $validatedData['module_disabled'],
            ]
        );

        $existingSubModules = $module->subModules()->get();

        // Loop through existing sub-modules and update or delete as necessary
        foreach ($existingSubModules as $subModule) {
            // Check if the sub-module was removed by the user
            if (!in_array($subModule->id, $validatedData['sub_module_id'])) {
                // Delete the sub-module if it was removed
                $subModule->delete();
            } else {
                // Update the sub-module if it was not removed
                $key = array_search($subModule->id, $validatedData['sub_module_id']);
                $subModule->update([
                    'sub_module_name' => $validatedData['sub_module_name'][$key],
                    'icon' => $validatedData['sub_module_icon'][$key],
                    'sub_module_route' => $validatedData['sub_module_route'][$key],
                    'disabled' => $validatedData['sub_module_disabled'][$key],
                ]);
            }
        }

        // Loop through new sub-modules and create them
        foreach ($validatedData['sub_module_name'] as $key => $value) {
            if (!empty($value) && empty($validatedData['sub_module_id'][$key])) {
                $module->subModules()->create([
                    'sub_module_name' => $value,
                    'icon' => $validatedData['sub_module_icon'][$key],
                    'sub_module_route' => $validatedData['sub_module_route'][$key],
                    'disabled' => $validatedData['sub_module_disabled'][$key],
                ]);
            }
        }
        $module->save();

        // Redirect to module list with success message
        return redirect()->route('module.list')->with('success', 'Module updated successfully');
    }
    public function deleteModule($id)
    {
        $module = Modules::find($id);
        if (!$module) {
            return response()->json(['error' => 'Module not found'], 404);
        }
        $module->delete();
        return response()->json(['message' => 'Module deleted successfully'], 200);
    }
}
