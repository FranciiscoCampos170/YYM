@extends('layouts.dashboard')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Configurações da Sala</h1>
                </div>
                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                        <i class="tio-back mr-1"></i> Criar sala
                    </a>
                </div>

            </div>
        </div>
    <!-- Edit user Modal -->
    <div class="" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               
               {{ session()->get('success') }}
               
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <i class="tio-clear tio-lg"></i>
                 </button>
             </div>
             @elseif(session()->has('error'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <i class="tio-warning mt-1 mr-1"></i>
               <div class="media-body" role="alert">
                {{session()->get('error')}}
               </div>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <i class="tio-clear tio-lg"></i>
                 </button>
             </div>
           @endif
  
            <!-- Body -->
            <div class="modal-body">
              <!-- Tab Content -->
              <div class="tab-content" id="editUserModalTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <form action="{{route('rooms.update', $room->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="hidden" value="{{$room->id}}" name="room_id">
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Sala <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>
  
                      <div class="col-sm-9">
                        <div class="js-form-message input-group input-group-sm-down-break">
                          <input type="text" class="form-control" name="room_name" id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name" value="{{$room->meetingName}}">
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label class="col-sm-3 col-form-label input-label">Mute usúarios quando eles entrarem</label>
  
                      <div class="col-sm-9">
                        <div class="js-form-message input-group input-group-sm-down-break">
                          <!-- Custom Radio -->
                          <div class="form-control">
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="muted_user" id="muted_user" 
                              @if ($room->setting->mute_user_participant == 0)
                                    checked
                                @endif value="0">
                              <label class="custom-control-label" for="muted_user">Não</label>
                            </div>
                          </div>
                          <!-- End Custom Radio -->
  
                          <!-- Custom Radio -->
                          <div class="form-control">
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="muted_user" id="muted_user2"
                              @if ($room->setting->mute_user_participant == 1)
                                    checked
                                @endif value="1">
                              <label class="custom-control-label" for="muted_user2">Sim</label>
                            </div>
                          </div>
                          <!-- End Custom Radio -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">O moderador deve aprovar antes do usúario entrar</label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="approval_before_joining" id="approval_before_joining"
                                @if ($room->setting->require_moderator_approval_before_joinig == 0)
                                    checked
                                @endif value="0">
                                <label class="custom-control-label" for="approval_before_joining">Não</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
    
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="approval_before_joining" id="approval_before_joining2"
                                @if ($room->setting->require_moderator_approval_before_joinig == 1)
                                    checked
                                @endif value="1">
                                <label class="custom-control-label" for="approval_before_joining2">Sim</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                      <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Permitir usúario começar a reunião</label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="allow_start_meeting" id="allow_start_meeting"
                                @if ($room->setting->allow_any_user_to_start_this_meeting == 0)
                                    checked
                                @endif value="0">
                                <label class="custom-control-label" for="allow_start_meeting">Não</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
    
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="allow_start_meeting" id="allow_start_meeting2"
                                @if ($room->setting->allow_any_user_to_start_this_meeting == 1)
                                    checked
                                @endif value="1">
                                <label class="custom-control-label" for="allow_start_meeting2">Sim</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                      <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Todos participam como moderador</label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="all_join_as_moderator" id="all_join_as_moderator"
                                @if ($room->setting->all_users_join_as_moderator == 0)
                                    checked
                                @endif value="0">
                                <label class="custom-control-label" for="all_join_as_moderator">Não</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
    
                            <!-- Custom Radio -->
                            <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="all_join_as_moderator" id="all_join_as_moderator2"
                                @if ($room->setting->all_users_join_as_moderator == 1)
                                    checked
                                @endif value="1">
                                <label class="custom-control-label" for="all_join_as_moderator2">Sim</label>
                              </div>
                            </div>
                            <!-- End Custom Radio -->
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                       <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Número de Telefone </label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <input type="text" class="form-control" name="dial_number" id="editFirstNameModalLabel" value="{{$room->setting->dial_number}}">
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                       <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Mensagem de Boas-vindas</label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <input type="text" class="form-control" name="welcome_messege" id="editFirstNameModalLabel" value="{{$room->setting->welcome_message}}">
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                       <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">URL do Logo</label>
    
                        <div class="col-sm-9">
                          <div class="js-form-message input-group input-group-sm-down-break">
                            <input type="text" class="form-control" name="url_logo" id="editFirstNameModalLabel"  value="{{$room->setting->logo}}">
                          </div>
                        </div>
                      </div>
                      <!-- End Form Group -->
                    <div class="d-flex justify-content-end">
                      <a href="{{route('rooms.index')}}" type="button" class="btn btn-white mr-2">Cancelar</a>
                      <button type="submit" class="btn btn-primary">Salvar Configuração</button>
                    </div>
                  </form>
                </div>
  
                
              </div>
              <!-- End Tab Content -->
            </div>
            <!-- End Body -->
          </div>
        </div>
      </div>
    </main>
      <!-- End Edit user Modal -->
@endsection