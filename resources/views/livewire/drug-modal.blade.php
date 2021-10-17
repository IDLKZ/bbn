<div class="modal-dialog">
    <div class="modal-content" style="background: white!important;">
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Сообщить о наркоторговле</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-md-flex mb-3">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" wire:model="name" class="form-control mb-3" placeholder="Ваше имя">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="email" wire:model="email" class="form-control mb-3" placeholder="Ваш e-mail">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" wire:model="phone" class="form-control mb-3" placeholder="Телефон">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" wire:model="city" class="form-control mb-3" placeholder="Город">
                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" wire:model="address" class="form-control" placeholder="Подозрительный адрес">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 text-md-center">
                            <textarea wire:model="text" cols="18" rows="7"
                                      placeholder="Текст Вашего сообщения (Не забудьте указать город, улицу, дом, квартиру подозрительного адреса)"></textarea>
                    </div>
                </div>
                <label>Загрузить фотографию</label>
                <input type="file" wire:model="image" class="form-control" accept="image/*">
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
    </div>
</div>
