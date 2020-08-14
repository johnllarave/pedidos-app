<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index () {
		//$products = Product::paginate(10); //{{$products->links()}}
		$products = Product::all();
		return view('admin.products.index')->with(compact('products')); //vista del listado de productos
	}

	public function create () {
		return view('admin.products.create'); //Ver formulario de registro
	}

	public function store (Request $request) {
		//Validar datos
		//Personalización de los mensajes de error
		$messages = [
			'nombre.required' => 'Debe ingresar el nombre del producto',
			'cod_sap.required' => 'Debe ingresar el código SAP del producto',
			'cod_sap.min' => 'El código debe tener mas de 6 caracteres',
			'cod_sap.numeric' => 'El valor debe ser numérico',
			'linea.required' => 'Debe seleccionar una opción',
			'formato.required' => 'Debe seleccionar una opción',
			'pvp.required' => 'Debe ingresar el valor del producto',
			'pvp.numeric' => 'El valor debe ser numérico',
			'pvp.min' => 'El valor no puede ser negativo',
			'grado.required' => 'Debe ingresar el grado',
			'area.required' => 'Debe ingresar el área'
		];

		//Reglas de las validaciones
		$rules = [
			'nombre' => 'required',
			'cod_sap' => 'required|min:6|numeric',
			'linea' => 'required',
			'formato' => 'required',
			'pvp' => 'required|numeric|min:0',
			'grado' => 'required',
			'area' => 'required'
		];

		//Función para la validación del formulario, recibe 3 parametros
		$this->validate($request, $rules, $messages);

		// Registrar nuevo producto
		//dd($request->all());

		$product = new Product();

		$product->nombre = $request->input('nombre');
		$product->cod_sap = $request->input('cod_sap');
		$product->linea = $request->input('linea');
		$product->formato = $request->input('formato');
		$product->pvp = $request->input('pvp');
		$product->grado = $request->input('grado');
		$product->area = $request->input('area');
		$product->save(); //INSERT

		return redirect('/admin/products');
	}

	public function edit ($id) {
		$product = Product::find($id);
		return view('admin.products.edit')->with(compact('product'));; //Ver formulario de registro
	}

	public function update (Request $request, $id) {
		//Registrar nuevo producto
		//dd($request->all());

		$product = Product::find($id);

		$product->nombre = $request->input('nombre');
		$product->cod_sap = $request->input('cod_sap');
		$product->linea = $request->input('linea');
		$product->formato = $request->input('formato');
		$product->pvp = $request->input('pvp');
		$product->grado = $request->input('grado');
		$product->area = $request->input('area');
		$product->save(); //UPDATE

		return redirect('/admin/products');
	}

	/*public function destroy ($id) {
		$product = Product::find($id);
		$product->delete(); //DELETE

		return back();
	}*/
}
