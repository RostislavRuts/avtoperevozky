<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $title = 'Отзывы';
        return view('admin.testimonials.index', compact('testimonials', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonials = Testimonial::all();
        $title = 'Добавить отзывы';
        return view('admin.testimonials.create', compact('testimonials', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'comment'=>'required',
            'status' => 'required',

        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;
        
        $testimonial->save();
        return redirect('/admin/testimonials');
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
    public function edit($id)
    {
        //Задачи этого метода:
        // 1. получаем данные редакируемого продукта с помощью $id
        //2. Этот метод возвращает представления с формой редактирования продуктов. 
        /*3. В файле resources/views/admin/products/edit.blade.php в форме action="/products" method="put". Далее данные из этой формы попадают в метод update см. public function update(Request $request, $id)*/
        $testimonial = Testimonial::find($id);
        $title = 'Редактировать отзыв';
        return view('admin.testimonials.edit', compact('testimonial', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'comment'=>'required',
            'status' => 'required',

        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;
        
        $testimonial->save();
        return redirect('/admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //С помощью модели связанной с этим контроллером удаляет продукт из БД по $id. Заканчиваеться редиректом
        $testimonial = Testimonial::find($id);
        $testimonial->delete(); 
        return redirect('/admin/testimonials');
    }
}
