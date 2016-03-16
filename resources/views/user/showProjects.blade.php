<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Projets</div>
                <div class="panel-body">
                    @foreach(Auth::user()->projects as $project)
                        <div class="panel-heading">
                            <a href="{{route('project.show', $project->id)}}">
                                <h4>{{ $project->project_name}}</h4>
                            </a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>