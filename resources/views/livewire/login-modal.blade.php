<form wire:submit.prevent="submit">
        <div class="mb-3">
            {{--                        <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
            <input type="text" wire:model="login" class="form-control" id="exampleInputLogin1" aria-describedby="emailHelp" placeholder="логин">
            @error('login') <span class="text-danger">{{ $message }}</span> @enderror
            {{--                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
        </div>
        <div class="mb-3">
            {{--                        <label for="exampleInputPassword1" class="form-label">Password</label>--}}
            <input type="password" wire:model="password" class="form-control" id="exampleInputPassword1" placeholder="пароль">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-success w-100">Войти</button>
        </div>
        <div class="mt-2">
            <a href="{{route('register')}}">
                <button type="button" class="btn w-100 bg-white">Зарегестрироваться</button>
            </a>
        </div>
    </form>
