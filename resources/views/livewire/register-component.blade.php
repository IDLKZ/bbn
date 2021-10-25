<form wire:submit.prevent="register">
    <div class="mb-3">
        {{--                        <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
        <input type="email" wire:model="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="e-mail">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        {{--                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
    </div>
    <div class="mb-3">
        {{--                        <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
        <input type="text" wire:model="login" class="form-control" id="exampleInputLogin1" aria-describedby="emailHelp" placeholder="логин">
        @error('login') <span class="text-danger">{{ $message }}</span> @enderror
        {{--                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
    </div>
    <div class="mb-3">
        {{--                        <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
        <input type="text" wire:model="phone" class="form-control" placeholder="номер телефона" autofocus>
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        {{--                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
    </div>
    <div class="mb-3">
        {{--                        <label for="exampleInputPassword1" class="form-label">Password</label>--}}
        <input type="password" wire:model="password" class="form-control" id="exampleInputPassword1" placeholder="пароль">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mt-2">
        <a href="{{route('register')}}">
            <button type="submit" class="btn btn-success w-100">Зарегистрироваться</button>
        </a>
        <button type="button" class="btn w-100 mt-2" data-bs-dismiss="modal">Отмена</button>
    </div>
</form>
