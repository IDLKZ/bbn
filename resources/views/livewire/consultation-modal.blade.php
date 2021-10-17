<div class="modal-dialog">
    <div class="modal-content" style="background: white!important;">
        <form wire:submit.prevent="submit">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Получить консультацию</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control mb-3" wire:model="name" placeholder="Ваше имя">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                <input type="text" wire:model="phone" class="form-control mb-3" placeholder="Телефон">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
    </div>
</div>
