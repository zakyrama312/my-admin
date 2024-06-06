<div>
    <main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Hotels</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" wire:model.live.debounce.300ms="search" placeholder="Search">
                  </div>
                  <div class="col-md-6">
                    <a href="/hotel/create" wire:navigate class="btn btn-primary float-end">Add Hotel</a>
                  </div>
                </div>
              </div>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Check In Time</th>
                    <th scope="col">Check Out Time</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($hotels as $hotel)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->phone }}</td>
                    <td>{{ $hotel->email }}</td>
                    <td>{{ $hotel->check_in_time }}</td>
                    <td>{{ $hotel->check_out_time }}</td>
                    <td><a href="/hotel/{{  $hotel->id  }}/edit" class="btn btn-small btn-warning" wire:navigate >Edit</a>  <button class="btn btn-small btn-danger" wire:click="delete({{ $hotel->id }})" wire:confirm= "Are you sure want to delete this Hotel?" >Delete</button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $hotels->links() }}
              <!-- End Table with hoverable rows -->

            </div>
          </div>
    
        </div>
    
      </div>
    </section>
    
    </main><!-- End #main -->
    </div>
    