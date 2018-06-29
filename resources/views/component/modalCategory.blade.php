<!-- Modal -->
<div class="modal fade" id="{{isset($idModal) ? $idModal : 'Error: Modal id not defined'}}" tabindex="-1" role="dialog"
     aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">{{isset($title) ? $title : 'Title not defined'}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{$form_action}}

            <div class="modal-body">
                @if ($form_action == 'category.store')
                    <form action="{{route($form_action)}}" id="formModal" method="{{$method}}">
                @endif
                @if ($form_action == 'category.update')
                    <form action="{{route($form_action, 'test')}}" id="formModal" method="{{$method}}">
                        {{method_field('patch')}}
                @endif
                    {{csrf_field()}}
                    <input type="hidden" name="category_id" id="category_id" value="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="descp">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <span><small>{{$msg}}</small></span>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>