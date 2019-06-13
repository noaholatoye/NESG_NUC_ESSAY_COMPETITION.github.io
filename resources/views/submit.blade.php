@extends('layouts.main')

@section('content')
<br><br><br><br><br><br>
<center>
    @if ($has_user_submitted == 0)
        <div class="container">
            <form name="myForm" action="{{route('submit_entry')}}" method="post" style="padding-top:120px;"
                onsubmit="return validateForm()">
                @csrf
                <fieldset class="row-2">
                    <center>
                        <legend><span class="number">2</span> Welcome back {{$current_user->name}}, submit your entry</legend>
                        <br><br>
                    </center>
            
                    <div class="textarea">
                        <label for="about-textarea">About you (100 words)</label>
                        <textarea name="user_profile" id="about-textarea" cols="50" rows="5" required
                            placeholder="Enter text here..."></textarea>
                    </div>
                    <div class="textarea">
                        <label for="summary-textarea">Essay Summary (100 words)</label>
                        <textarea name="essay_summary" id="summary-textarea" cols="50" rows="5" placeholder="Enter text here..."
                            required></textarea>
                    </div>
                    <div class="textarea">
                        <label for="essay-textarea">Paste Essay (1500 words)</label>
                        <textarea name="essay" id="essay-textarea" cols="50" rows="10" placeholder="Paste text here..."
                            required></textarea>
                    </div>
                    
                </fieldset>
                <button type="submit">Submit</button>
            </form>
        </div>
    @else
        <div class="container">
            <h1>Dear <strong>{{$current_user->name}}</strong>, It would seem that you have already submitted an entry! Multiple entries are not allowed, You will be notified when the shortlist is made available, remain optimistic!</h1>
        </div>
    @endif
</center>
<br><br><br>
@endsection
