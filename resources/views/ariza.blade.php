@extends('layouts.botstraplayout')

@section('glavmenu')
<p>
    <div class="row-sm-10 text-center">

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Ismi</th>
                  <th scope="col">Familiyasi</th>
                  <th scope="col">Sharif</th>
                  <th scope="col">Tug'ilgan sanasi</th>
                  <th scope="col">Ma'lumoti</th>
                  <th scope="col">Tamomlagan</th>
                  <th scope="col">Xarbiy xizmat</th>
                  <th scope="col">Tug'ilgan joyi</th>
                  <th scope="col">Tel nomer</th>
                  <th scope="col">Pass seriya</th>
                  <th scope="col">Pass nomer</th>
                  <th scope="col">Ariza vaqti</th>
                  <th scope="col">Status</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>        
                    @foreach ($ariza as $ariz)
                    <tr>        
                     <td>{{$ariz->first_name}}</td>
                     <td>{{$ariz->last_name}}</td>
                     <td>{{$ariz->middle_name}}</td>
                     <td>{{$ariz->dataroj}}</td>
                     <td>{{$ariz->malumot}}</td>
                     <td>{{$ariz->institut}}</td>
                     <td>{{$ariz->xarbiy}}</td>
                     <td>{{$ariz->mestoroj}}</td>
                     <td>{{$ariz->telnomer}}</td>
                     <td>{{$ariz->pass_seriya}}</td>
                     <td>{{$ariz->pass_number}}</td>
                     <td>{{$ariz->created_at}}</td>                    
                     <td>
                        <div class="container">
                            <input class="form-check-input center" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>                        
                          </div>
                     </td>
                     <td> 
                        <button type="button" class="btn btn-outline-success">SMS</button>
                        <button type="button" class="btn btn-outline-danger">O'chirish</button>
                     </td>
                     </tr>
                    @endforeach
              </tbody>
          </table>
    
    </div>
</p>
    



@endsection	 