<x-layout>
    <div class="col-12 col-md-6">
        <h2>Lavora come amministratore</h2>
        <p>Cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fuga laudantium numquam dicta impedit sequi? Impedit, quas eaque eius, non alias facere molestias assumenda temporibus exercitationem ipsam aliquam nemo commodi?</p>

        <h2>Lavora come Revisore </h2>
        <p>Cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fuga laudantium numquam dicta impedit sequi? Impedit, quas eaque eius, non alias facere molestias assumenda temporibus exercitationem ipsam aliquam nemo commodi?</p>

        <h2>Lavora come redattore</h2>
        <p>Cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fuga laudantium numquam dicta impedit sequi? Impedit, quas eaque eius, non alias facere molestias assumenda temporibus exercitationem ipsam aliquam nemo commodi?</p>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    {{-- sezione invia candidatura --}}
    <div class="container create-article">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('careers.submit')}}">
                    @csrf
                        {{-- input ruoli --}}
                        <label class="fw-semibold">Per quale ruolo ti stai candidando?</label>
                        <select name="role" class="form-control " >
                            
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                            
                        </select>
                    <!-- email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') ?? Auth::user()->email}}"/>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <!-- body input -->
                    <div class="form-outline mb-4">
                        <label class="form-label mt-3 fw-semibold">Parlaci di te</label>
                        <textarea class="form-control fw-semibold @error('message') is-invalid @enderror" name="message" cols="30" rows="10">{{old('message')}}</textarea>    
                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary ">Invia la candidatura</button>
                </form>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</x-layout>