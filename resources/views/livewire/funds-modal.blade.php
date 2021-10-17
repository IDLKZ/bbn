<div class="modal-dialog">
    <div class="modal-content" style="background: white!important;">
        <form wire:submit.prevent="submit">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Помочь фонду</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" wire:model="login" class="form-control mb-3" placeholder="Логин">
                @error('login') <span class="text-danger">{{ $message }}</span> @enderror
                <input type="email" wire:model="email" class="form-control mb-3" placeholder="Ваш e-mail">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                <input type="text" wire:model="phone" class="form-control mb-3" placeholder="Телефон">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                <input type="text" wire:model="title" class="form-control mb-3" placeholder="Наименование компании (если есть)">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                <textarea wire:model="text" class="w-100" rows="8" placeholder="чем хотели бы помочь"></textarea>
                @error('text') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
    </div>
</div>
