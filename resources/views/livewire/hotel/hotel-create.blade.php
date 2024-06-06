<div>
    <main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Hotel Create</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav> --}}
    </div>
    <!-- End Page Title -->
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                  <div class="col-md-6">
                    <a href="/hotel" wire:navigate class="btn btn-info text-white">&laquo; Back</a>
                  </div>
                </div>
              </div>
              <form wire:submit.prevent= "create">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" wire:model="name" class="form-control">
                    @error('name')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="number" wire:model="phone" class="form-control">
                    @error('phone')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" wire:model="email" class="form-control">
                    @error('email')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea wire:model="address" id="" class="form-control"></textarea>
                    @error('address')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputStars" class="col-sm-2 col-form-label">Stars</label>
                  <div class="col-sm-10">
                    <input type="number" wire:model="stars" class="form-control">
                    @error('stars')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputCheckIn" class="col-sm-2 col-form-label">Check In Time</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" wire:model="check_in_time" class="form-control">
                    @error('check_in_time')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputCheckOut" class="col-sm-2 col-form-label">Check Out Time</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" wire:model="check_out_time" class="form-control">
                    @error('check_out_time')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <button class="btn btn-primary float-end" type="submit">Submit</button>
              </form>
              
            </div>
          </div>
    
        </div>
    
      </div>
    </section>
    
    </main><!-- End #main -->
    </div>
    