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
        return view('AdminViews.Roles.add_modules', compact('module'));

    }
    public function modulesList()
    {
        $modules = Modules::all()->sortByDesc('id');

        return view('AdminViews.Roles.modules_list', compact('modules'));
    }

    public function createModules(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'module_name' => 'required|max:255',
            'module_icon' => 'nullable|max:255',
            'module_route' => 'nullable|max:255',
            'module_disabled' => 'required',
            'sub_module_name.*' => 'nullable|max:255',
            'sub_module_icon.*' => 'nullable|max:255',
            'sub_module_route.*' => 'nullable|max:255',
            'sub_module_disabled.*' => 'required',
        ]);

        // Create a new module
        $module = new Modules;
        $module->module_name = $validatedData['module_name'];
        $module->icon = $validatedData['module_icon'];
        $module->module_route = $validatedData['module_route'];
        $module->disabled = $validatedData['module_disabled'];
        $module->save();

        // Add the sub modules to the module
        if (isset($validatedData['sub_module_name'])) {
            foreach ($validatedData['sub_module_name'] as $key => $value) {
                if (!empty($value)) {
                    $sub_module = new SubModules;
                    $sub_module->sub_module_name = $value;
                    $sub_module->icon = $validatedData['sub_module_icon'][$key];
                    $sub_module->sub_module_route = $validatedData['sub_module_route'][$key];
                    $sub_module->disabled = $validatedData['sub_module_disabled'][$key];
                    $module->subModules()->save($sub_module);}
            }
        }
        // Redirect to the module page with a success message
        return redirect()->route('module.list')->with('admin_status', 'Module added successfully.');

    }
    public function updateModule(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'module_name' => 'required|max:255',
            'module_icon' => 'nullable|max:255',
            'module_route' => 'nullable|max:255',
            'sub_module_name.*' => 'nullable|max:255',
            'sub_module_icon.*' => 'nullable|max:255',
            'sub_module_route.*' => 'nullable|max:255',
        ]);

        $module = Modules::findOrFail($id);

        // Update module data
        $module->module_name = $validatedData['module_name'];
        $module->icon = $validatedData['module_icon'];
        $module->module_route = $validatedData['module_route'];

        // Delete all existing sub-modules of the module
        $module->subModules()->delete();

// Create new sub-modules
        if (isset($validatedData['sub_module_name'])) {
            $subModulesData = [];
            foreach ($validatedData['sub_module_name'] as $key => $value) {
                if (!empty($value)) {
                    $subModulesData[] = [
                        'sub_module_name' => $value,
                        'icon' => $validatedData['sub_module_icon'][$key],
                        'sub_module_route' => $validatedData['sub_module_route'][$key],
                    ];
                }}
            $module->subModules()->createMany($subModulesData);
        }

// Save changes
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
