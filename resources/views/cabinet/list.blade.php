@extends('layouts.app')   
@section('content')



<div class="container-fluid pt-9">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="">
                              <h3 class="col-12 mb-0">Кабинеты</h3>
                            </div>
                            <div class="">
                              <a href="{{ route('cabinets.create') }}" class="btn btn-icon btn-3 btn-primary">
                                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                <span class="btn-inner--text">Добавить</span>
                                  
                              </a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="card-body">
                        
  <br>
   <div class="row">
        <div class="col-12">
          


<div class="table-responsive">
    <table class="table align-items-center">
    <thead class="thead-light">
        <tr>
           <th>Id</th>
           <th>Кабинет</th>
           <td colspan="2"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($cabinets as $cabinet)
        <tr>
            <th scope="row">
                {{ $cabinet->id }}
            </th>
           <td>{{ $cabinet->cabinet }}</td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="{{ route('cabinets.edit',$cabinet->id)}}" class="dropdown-item">Редактировать</a>
                        <form action="{{ route('cabinets.destroy', $cabinet->id)}}" method="post">
                          {{ csrf_field() }}
                          @method('DELETE')
                          <button type="submit" class="dropdown-item">Удалить</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

         
          {!! $cabinets->links() !!}
       </div> 
   </div>
                    </div>
                </div>
            </div>
        </div>
        
  
</div>




 @endsection  