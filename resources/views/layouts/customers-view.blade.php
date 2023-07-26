@include('layouts.header')


  <body>
    <form action="" method="GET">
        <div class="form-group">
          <input type="search" name="search" id="" class="form-control" placeholder="Search by Email or Username" aria-describedby="helpId">
          <button id="helpId" class="text-muted btn btn-light" type='submit'>Search</button>
        </div>
    </form>

      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>CUSTOMER ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>COUNTRY</th>
                    <th>CITY</th>
                    <th>ADDRESS</th>
                    <th>GENDER</th>
                    <th>DOB</th>
                    <th>ACTION</th>

                </tr>
            </thead>
            <tbody>
                @foreach($customers as $value)
                <tr>
                    <td>{{$value->customer_id}}</td>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->Email}}</td>
                    <td>{{$value->Country}}</td>
                    <td>{{$value->City}}</td>
                    <td>{{$value->Address}}</td>
                    <td>{{$value->Gender}}</td>
                    <td>{{get_formatted_date($value->DOB , "d-M-Y")}}</td>
                    <td>
                        <a href="{{route('customer.delete', ['id' => $value->customer_id])}}">
                        <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{url('/customer/edit',)}}/{{$value->customer_id}}">
                        <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="row" style="position: inline;">
            {{ $customers->links() }}
        </div> --}}
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    @include('layouts.footer')
