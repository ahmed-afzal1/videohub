<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PlanFeature;
use Illuminate\Http\Request;

class PlanFeatureController extends Controller
{
    public function index()
    {
        $features = PlanFeature::latest()->get();

        $pageTitle = __('Subscription Plan Features');

        return view('admin.subscription_plan.features',compact('features','pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'features' => 'required|unique:plan_features,features',
        ]);


        PlanFeature::create(['features' => $request->features]);

        $notify[] = ['success',__('Features Created Successfully')];

        return back()->withNotify($notify);
    }

    public function update(Request $request, $id)
    {
        $planFeatures = PlanFeature::findOrFail($id);

        $request->validate([
            'features' => 'required|unique:plan_features,features,'.$planFeatures->id,
        ]);


        $planFeatures->update(['features' => $request->features]);

        $notify[] = ['success',__('Features Updated Successfully')];

        return back()->withNotify($notify);
    }

    public function status(Request $request, $id)
    {
        $planFeatures = PlanFeature::findOrFail($id);

        $planFeatures->update(['status' => $request->status]);


        return response()->json(['success'=>__('Features Status Updated Successfully')]);
    }
}
