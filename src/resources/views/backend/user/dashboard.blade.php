<x-app-layout>
    <style>
        .fb-sidebar { position: sticky; top: 100px; }
        .fb-post-card { border-radius: 8px; border: 1px solid #e1e1e1; margin-bottom: 20px; background: #fff; }
        .fb-post-header { padding: 12px 16px; display: flex; align-items: center; }
        .fb-post-avatar { width: 40px; height: 40px; border-radius: 50%; background: #ddd; margin-right: 12px; }
        .fb-post-body { padding: 0 16px 12px; }
        .fb-post-img { width: 100%; border-top: 1px solid #f0f0f0; border-bottom: 1px solid #f0f0f0; }
        .fb-post-footer { padding: 8px 16px; border-top: 1px solid #f0f0f0; display: flex; justify-content: space-around; }
        .fb-action-btn { color: #65676b; font-weight: 600; cursor: pointer; padding: 8px; width: 100%; text-align: center; border-radius: 4px; transition: background 0.2s; }
        .fb-action-btn:hover { background: #f2f2f2; }
        .fb-status-input { border-radius: 20px; background: #f0f2f5; border: none; padding: 10px 20px; cursor: pointer; width: 100%; text-align: left; color: #65676b; }
        .fb-status-input:hover { background: #e4e6eb; }

        /* Gift Animations */
        .gift-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .anim-gift { font-size: 150px; position: absolute; }
        
        .anim-plane { animation: planeFly 4s linear forwards; }
        @keyframes planeFly {
            0% { transform: translate(-100vw, -20vh) rotate(10deg); font-size: 50px; }
            50% { transform: translate(0, 0) rotate(0deg); font-size: 200px; }
            100% { transform: translate(100vw, 20vh) rotate(-10deg); font-size: 50px; }
        }

        .anim-tiger { animation: tigerZoom 3s ease-out forwards; }
        @keyframes tigerZoom {
            0% { transform: scale(0) rotate(-45deg); opacity: 0; }
            50% { transform: scale(1.5) rotate(0deg); opacity: 1; }
            100% { transform: scale(1) rotate(0deg); opacity: 0; }
        }

        .anim-croc { animation: crocWalk 5s linear forwards; }
        @keyframes crocWalk {
            0% { transform: translateX(100vw); bottom: 10%; }
            100% { transform: translateX(-100vw); bottom: 10%; }
        }

        .anim-rose { animation: roseRain 3s ease-in-out forwards; }
        @keyframes roseRain {
            0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
        }
    </style>

    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="container-fluid">
                <div class="row g-4">
                    <!-- Left Sidebar (FB Style) -->
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="fb-sidebar">
                            <ul class="link-list-menu">
                                <li><a href="{{ route('user.profile') }}"><em class="icon ni ni-user-circle"></em><span>{{ Auth::user()->name }}</span></a></li>
                                <li><a href="{{ route('store.index') }}"><em class="icon ni ni-diamond text-primary"></em><span>Saldo: <b id="user-diamonds">{{ Auth::user()->diamonds }}</b> Diamond</span></a></li>
                                <li><a href="#"><em class="icon ni ni-users"></em><span>Teman</span></a></li>
                                <li><a href="#"><em class="icon ni ni-users-fill"></em><span>Grup</span></a></li>
                                <li><a href="#"><em class="icon ni ni-video"></em><span>Watch</span></a></li>
                                <li><a href="#"><em class="icon ni ni-clock"></em><span>Kenangan</span></a></li>
                                <li><a href="#"><em class="icon ni ni-bookmark"></em><span>Tersimpan</span></a></li>
                                <li class="divider"></li>
                                <li><a href="#"><em class="icon ni ni-grid-add-fill"></em><span>Lihat Semua</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Center Feed -->
                    <div class="col-xl-6 col-lg-8">
                        <!-- Post Creation -->
                        <div class="card fb-post-card">
                            <div class="card-inner">
                                <div class="d-flex align-center">
                                    <div class="user-avatar bg-primary me-3">
                                        <span>{{ substr(Auth::user()->name, 0, 2) }}</span>
                                    </div>
                                    <button class="fb-status-input">Apa yang Anda pikirkan, {{ explode(' ', Auth::user()->name)[0] }}?</button>
                                </div>
                                <hr class="my-3">
                                <div class="d-flex justify-content-between">
                                    <div class="fb-action-btn"><em class="icon ni ni-video-fill text-danger"></em> Video Langsung</div>
                                    <div class="fb-action-btn"><em class="icon ni ni-img-fill text-success"></em> Foto/Video</div>
                                    <div class="fb-action-btn"><em class="icon ni ni-happy-fill text-warning"></em> Perasaan</div>
                                </div>
                            </div>
                        </div>

                        <!-- Sample Post 1 -->
                        <div class="fb-post-card">
                            <div class="fb-post-header">
                                <div class="user-avatar bg-info me-3"><span>AD</span></div>
                                <div>
                                    <div class="fw-bold">Admin Codekarya</div>
                                    <div class="text-soft small">2 jam yang lalu • <em class="icon ni ni-globe"></em></div>
                                </div>
                            </div>
                            <div class="fb-post-body">
                                Selamat datang di dashboard baru Codekarya App! Sekarang Anda bisa berinteraksi dengan kreator lain lebih mudah.
                            </div>
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1000&auto=format&fit=crop" class="fb-post-img" alt="">
                            <div class="fb-post-footer">
                                <div class="fb-action-btn"><em class="icon ni ni-thumbs-up"></em> Suka</div>
                                <div class="fb-action-btn"><em class="icon ni ni-chat-circle"></em> Komentar</div>
                                <div class="fb-action-btn text-primary fw-bold" onclick="openGiftPicker(2)"><em class="icon ni ni-diamond"></em> Sawer</div>
                                <div class="fb-action-btn"><em class="icon ni ni-share-alt"></em> Bagikan</div>
                            </div>
                        </div>

                        <!-- Sample Post 2 -->
                        <div class="fb-post-card">
                            <div class="fb-post-header">
                                <div class="user-avatar bg-warning me-3"><span>KR</span></div>
                                <div>
                                    <div class="fw-bold">Kreator Digital</div>
                                    <div class="text-soft small">5 jam yang lalu • <em class="icon ni ni-globe"></em></div>
                                </div>
                            </div>
                            <div class="fb-post-body">
                                Baru saja merilis podcast baru di Creative Space! Cek ya guys.
                            </div>
                            <div class="fb-post-footer">
                                <div class="fb-action-btn"><em class="icon ni ni-thumbs-up"></em> Suka</div>
                                <div class="fb-action-btn"><em class="icon ni ni-chat-circle"></em> Komentar</div>
                                <div class="fb-action-btn text-primary fw-bold" onclick="openGiftPicker(2)"><em class="icon ni ni-diamond"></em> Sawer</div>
                                <div class="fb-action-btn"><em class="icon ni ni-share-alt"></em> Bagikan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <h6 class="overline-title mb-3">Disponsori</h6>
                                <div class="mb-4">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400&auto=format&fit=crop" class="rounded w-100 mb-2" alt="">
                                    <a href="#" class="fw-bold d-block">Jasa Web Murah</a>
                                    <span class="text-soft small">www.codekaryaapp.com</span>
                                </div>
                                <hr>
                                <h6 class="overline-title mt-3 mb-3">Kontak</h6>
                                <ul class="link-list-plain">
                                    <li class="d-flex align-center mb-2">
                                        <div class="user-avatar xs bg-lighter me-2"><span>AS</span></div>
                                        <span>Andi Saputra</span>
                                    </li>
                                    <li class="d-flex align-center mb-2">
                                        <div class="user-avatar xs bg-lighter me-2"><span>BS</span></div>
                                        <span>Budi Santoso</span>
                                    </li>
                                    <li class="d-flex align-center mb-2">
                                        <div class="user-avatar xs bg-lighter me-2"><span>CL</span></div>
                                        <span>Citra Lestari</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        const gifts = {
            'rose': { name: 'Mawar', price: 1, icon: '🌹', class: 'anim-rose' },
            'tiger': { name: 'Macan', price: 500, icon: '🐯', class: 'anim-tiger' },
            'croc': { name: 'Buaya', price: 1000, icon: '🐊', class: 'anim-croc' },
            'plane': { name: 'Kapal Terbang', price: 5000, icon: '✈️', class: 'anim-plane' }
        };

        function openGiftPicker(receiverId) {
            let html = '<div class="row g-2">';
            for (let key in gifts) {
                html += `
                    <div class="col-6">
                        <div class="p-2 border rounded cursor-pointer gift-item" onclick="sawerCreator('${receiverId}', '${key}')" style="cursor:pointer">
                            <div style="font-size: 30px">${gifts[key].icon}</div>
                            <div class="fw-bold">${gifts[key].name}</div>
                            <div class="text-primary small">${gifts[key].price} Diamond</div>
                        </div>
                    </div>
                `;
            }
            html += '</div>';

            Swal.fire({
                title: 'Pilih Gift Saweran',
                html: html,
                showConfirmButton: false,
                showCloseButton: true
            });
        }

        function sawerCreator(receiverId, giftType) {
            const gift = gifts[giftType];
            
            // Close picker
            Swal.close();

            // Call API
            fetch("{{ route('store.sawer') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    receiver_id: receiverId,
                    gift_type: giftType
                })
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    playGiftAnimation(giftType);
                    document.getElementById('user-diamonds').innerText = data.new_balance;
                    
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    });
                } else {
                    Swal.fire('Gagal!', data.message, 'error');
                }
            });
        }

        function playGiftAnimation(giftType) {
            const gift = gifts[giftType];
            const overlay = document.createElement('div');
            overlay.className = 'gift-overlay';
            
            // For Rose, we create multiple elements
            if(giftType === 'rose') {
                for(let i=0; i<15; i++) {
                    const el = document.createElement('div');
                    el.className = 'anim-gift ' + gift.class;
                    el.innerText = gift.icon;
                    el.style.left = Math.random() * 100 + 'vw';
                    el.style.animationDelay = Math.random() * 2 + 's';
                    overlay.appendChild(el);
                }
            } else {
                const el = document.createElement('div');
                el.className = 'anim-gift ' + gift.class;
                el.innerText = gift.icon;
                overlay.appendChild(el);
            }

            document.body.appendChild(overlay);
            
            // Remove after animation
            setTimeout(() => {
                overlay.remove();
            }, 6000);
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    </script>
    @endpush
</x-app-layout>
