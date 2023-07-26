@include('layouts.header')


<form style="background-color: black;" class="" action="{{ $url }}" method="post">
    @csrf
  <div class="container mt-4 card p-3">
  <h1 class="text-center" style="font-weight:bold;">{{$title}}</h1>

        <label for="name" style="font-weight:bold;">Name:</label>
        <input type="text" id="name" name="name" class="from-control" required value="{{isset($customers) ? $customers->Name : ''}}">
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </span><br><br>


        <label for="email" style="font-weight:bold;">Email:</label>
        <input type="email" id="email" name="email" class="from-control" required value="{{isset($customers) ? $customers->Email : ''}}">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span><br><br>



        <label for="password" style=" font-weight: bold; ">Password:</label>
        <input type="password" id="password" name="password" class="from-control" required >
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span><br><br>


        <label for="confirm_password" style="font-weight:bold;">Confirm Password:</label>
        <input type="password" id="confirm_password" name="password_confirmation" class="from-control" required>
        <span class="text-danger">
            @error('password_confirmation')
            {{$message}}
            @enderror
        </span><br><br>


        <label for="country" style="font-weight:bold;">Country:</label>
        <input type="text" id="country" name="country" class="from-control" required value="{{isset($customers) ? $customers->Country : ''}}"><br><br>
        <span class="text-danger">
            @error('country')
            {{$message}}
            @enderror
        </span>


        <label for="city" style="font-weight:bold;">City:</label>
        <input type="text" id="city" name="city" class="from-control" required value="{{isset($customers) ? $customers->City : ''}}"><br><br>
        <span class="text-danger">
            @error('city')
            {{$message}}
            @enderror
        </span>


        <label for="address" style="font-weight:bold;">Address:</label>
        <input type="text" id="address" name="address" class="from-control" required value="{{isset($customers) ? $customers->Address : ''}}"><br><br>
        <span class="text-danger">
            @error('address')
            {{$message}}
            @enderror
        </span>


        <label for="gender" style="font-weight:bold;">Gender:</label>
        <select id="gender" name="gender" class="form-control" required>
            <option value="">Select</option>
            <option value="male" {{ isset($customers) && $customers->Gender === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ isset($customers) && $customers->Gender === 'Female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ isset($customers) && $customers->Gender === 'Other' ? 'selected' : '' }}>Other</option>
        </select><br><br>
        <span class="text-danger">
            @error('gender')
            {{$message}}
            @enderror
        </span>


        <label for="dob" style="font-weight:bold;">Date of Birth:</label>
        <input type="date" id="dob" name="DOB"  class="from-control" required value="{{isset($customers) ? $customers ->DOB : ''}}/"><br><br>
        <span class="text-danger">
            @error('DOB')
            {{$message}}
            @enderror
        </span>


        <input class='text-center btn btn-outline-dark' type="submit" value="Submit">
  </form>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@include('layouts.footer')
