@props([
    'text' => 'Ваша заявка отправлена, в ближайшее время мы свяжемся в вами.'
])
<div class="af-message p-4">
    <p class="bg-[#aee363] rounded-[50%] flex justify-center w-[85px] h-[85px]">
        <img width="35" class="" height="35" loading="lazy" alt="Thanks" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDEiIHZpZXdCb3g9IjAgMCA0MCA0MSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zOC4zMzQ2IDIwLjUwMDNDMzguMzM0NiAzMC42MjUzIDMwLjEyNjMgMzguODMzNyAyMC4wMDEzIDM4LjgzMzdDOS44NzYzIDM4LjgzMzcgMS42Njc5NyAzMC42MjUzIDEuNjY3OTcgMjAuNTAwM0MxLjY2Nzk3IDEwLjM3NTMgOS44NzYzIDIuMTY2OTkgMjAuMDAxMyAyLjE2Njk5QzMwLjEyNjMgMi4xNjY5OSAzOC4zMzQ2IDEwLjM3NTMgMzguMzM0NiAyMC41MDAzWiIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE0LjE2OCAyMi4xNjY3TDE5LjE2OCAyNS41TDI1LjgzNDYgMTUuNSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==">
    </p>
    <p class="text-lg/6 py-3">{{ $text }}</p>

</div>


