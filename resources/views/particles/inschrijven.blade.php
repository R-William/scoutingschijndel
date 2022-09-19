<form method="post" action="{{ route('first_time.post') }}">
    {{ csrf_field() }}
    <select name="group" class="form-control" >
        @foreach ($subgroups as $subgroup)
            <option value="{{ $subgroup->id }}" @if($loop->first) selected @endif>
                {{ $subgroup->name }} - {{ $subgroup->date }} {{ $subgroup->start_time }} - {{ $subgroup->end_time }}
            </option> 
        @endforeach
    </select><br />
    <label>Geslacht *</label><br/>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
        <label class="form-check-label" for="male">
          Jongen
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="women" value="women">
        <label class="form-check-label" for="women">
            Meisje
        </label>
    </div><br />
    
    <div class="form-group">
        <label for="name">Naam *</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefoon-nummer</label>
        <input type="phone" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="geb-date">Geboortedatum *</label>
        <input type="date" class="form-control" name="geb_date" required>
    </div>
    <div class="form-group">
        <label for="comment">Opmerking</label>
        <textarea class="form-control" name="comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Verstuur" class="btn btn-info"/><br />
    </div>
</form>