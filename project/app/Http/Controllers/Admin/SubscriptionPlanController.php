<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use App\PlanFeature;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pageTitle = __('Subscription Plan');

        $subscriptions = SubscriptionPlan::orderBy('id', 'desc')->paginate();

        return view('admin.subscription_plan.index', compact('subscriptions', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = __('Subscription Plan Create');

        $features = PlanFeature::where('status', 1)->get();

        return view('admin.subscription_plan.create', compact('features','pageTitle'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'plan_name' => 'required',
            'price' => 'gte:0|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'description' => 'required|min:5',
            'duration' => 'required|integer|gt:0',
            'status' => 'required|integer|in:0,1',
        ]);

        SubscriptionPlan::create([
            'plan_name' => $request->plan_name,
            'price' => $request->price,
            'description' => $request->description,
            'duration' => $request->duration,
            'status' => $request->status,
            'plan_features' => $request->plan_features,
        ]);

        $notify[] = ['success', __('Subcription Created Successfully')];
        return back()->withNotify($notify);
    }

    public function edit($id)
    {
        $pageTitle = __('Edit Subscription Plan');
        $plan = SubscriptionPlan::findOrFail($id);
        $features = PlanFeature::where('status', 1)->get();
        return view('admin.subscription_plan.edit', compact('plan', 'features', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'plan_name' => 'required',
            'price' => 'gte:0|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'description' => 'required|min:5',
            'duration' => 'required|integer|gt:0',
            'status' => 'required|integer|in:0,1',
        ]);

        $plan = SubscriptionPlan::findOrFail($id);

        $plan->update([
            'plan_name' => $request->plan_name,
            'price' => $request->price,
            'description' => $request->description,
            'duration' => $request->duration,
            'status' => $request->status,
            'plan_features' => $request->plan_features,
        ]);

        $notify[] = ['success', __('Subcription Updated Successfully')];
        return back()->withNotify($notify);
    }

    //  public function destroy($id)
    //  {
    //     $data = SubscriptionPlan::findOrFail($id);

    //     $data->delete();
    //     $notify[] = ['success',__('Successfully Deleted Plan')];
    //     return redirect()->back()
    //  }

}
