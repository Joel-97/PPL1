<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        
        return view(
            'company.index',
            array(
                'company' => $company
            )
        );
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request,Company $compa)
    {
        $compa=Company::create([
        'companyId' => $request['companyId'],
        'companyName' => $request['companyName'],
        'companyPhone' =>$request['companyPhone'],
        'companyEmail' => $request['companyEmail'],
        'companyAddress' =>$request['companyAddress'],
        'requiredProfile' => $request['requiredProfile'],
        'companyRequirements' => $request['companyRequirements'],
        'companyInfo' => $request['companyInfo'],
        'companyDescription' => $request['companyDescription'],
        ]);
       
        return redirect()->action('CompanyController@index')->withStatus(__('Empresa registrada con éxito.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->except(['_method','_token']));
        return redirect()->action('CompanyController@index')->withStatus(__('Empresa actualizado con éxito.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->action('CompanyController@index')->withStatus(__('Empresa eliminada con exito.'));
    }
}
