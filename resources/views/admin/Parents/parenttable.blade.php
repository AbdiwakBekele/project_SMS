<table id="example" class="table  align-middle mb-0 bg-white" style="width:100%">
    <thead class="bg-light">
        <tr>
           
        <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>



        </tr>
    </thead>
    <tbody>
    @foreach ($data as $key => $parent)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $parent->parents_name }}</td>
    <td>{{ $parent->email }}</td>
    <td>
      @if(!empty($parent->getRoleNames()))
        @foreach($parent->getRoleNames() as $v)
           <!-- <label class="badge badge-success">{{ $v }}</label> -->
           {{ $v }}
        @endforeach
      @endif
    </td>
        <td>
          <a href="{{url('admin/parents/'.$parent->id.'/delete')}}"> Delete</a>
        </td>
  </tr>
 @endforeach
        <!-- <tr> -->
      <!-- <td>Kaelabe Erdachew</td>
      <td><button class="btn-success">Male</button></td>
      <td>kale123@gmail.com</td>
      <td><a href="tel:+251964568990">+251964568990</a></td>
      <td ><select size="1" id="row-1-office" name="row-1-office"   title="List of Children ">
                    <option value="Edinburgh" selected="selected" vlaue="">
                        3-children
                    </option>
                    <option value="London">
                        azalu
                    </option>
                    <option value="New York">
                       Kebe
                    </option>
                    <option value="San Francisco">
                       breke
                    </option>
                    
                </select></td>

            <td class="custom-column">
                <ul class="list-inline m-0">
                    <li class="list-inline-item">
                        <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-check"></i></button>
            </td> -->

        <!-- </tr> -->
        
    <tfoot>
        <tr>
            
        <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>



        </tr>
    </tfoot>
</table>