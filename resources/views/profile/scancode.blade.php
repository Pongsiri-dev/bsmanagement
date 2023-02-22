<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    {{-- <script src="{{ asset('js/qrcode.min.js') }}"></script> --}}
    <title> Scan QR Code </title>
</head>

<body>
    <x-app-layout>
        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <div class="container mx-auto">
                    <p> รหัสสมาชิก: {{ Auth::user()->member_code }} </p>
                    <p> ชื่อ - สกุล: {{ Auth::user()->name . '  ' . Auth::user()->lastname }} </p>
                    <p> เบอร์โทรศัพท์: {{ Auth::user()->telephone }} </p>
                    <div id="qr-reader-results"> </div>
                    {{-- <img class="qrcode-img" src="" /> --}}
                    {{-- <img width="64"
                        src="data:image/gif;base64,R0lGODlhMgAyAPcAAPv7+wMDA/Pz8ysrK7Ozs0NDQ6Ojo1NTU9PT0yMjI+Pj45OTk8PDwxMTE2NjYzMzMwsLCxsbG9vb20tLS2tra8vLy1tbW6urqzo6Ont7e4ODg4uLi3NzcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQEBAD/ACwAAAAAMgAyAAAI/QABCBxIsKDBgwgTKlzIsKHDhxAjSpzoMIDFiwMoIhxw8SLCjhYzajT4AGSAjydHOhRgEaXKlS0Pxny5kGVKgzNpJrSJ8IHIgiaDCvVI8mfFoUg76sz5kCdNpjBvqoTa0OlLqgytTpXaFKtErwq1jgS7k+xDswfFakRrUC1FtgXdToRLUO5XrlGX4q1KV2FfgXYj/gUQGOLgwmf3Zh0sU3FNxjgdh4UMVHJZy4knIj6qmTLBw54HgsZ8VABh0wJQqz5NmHBogRZTy55Nm7aE1wCS6iZNcIBR0buRHvTtUudCrLgZIuc90vRy42llL+/4WyVHkCipQy+JHbr37+AFw4unGBAAIfkEBAQA/wAsAAAAAAEAAQAACAQAAQQEACH5BAQEAP8ALBcABAAFAAIAAAgNADcECBBBgMAACQQEBAAh+QQEBAD/ACwRAAQADwACAAAIEAAdBBhIsCDBAhQMKhxYICAAIfkEBAQA/wAsCgAEAB4AAgAACBQAAwgcSLCgwYMVBhxcyHAghIQBAQAh+QQEBAD/ACwlAAQAAwACAAAIBgADCBwYEAAh+QQEBAD/ACwGAAQAJgADAAAIKAADCBQYoaDBgwgTKhzIsKHDhxAjBqiAAAFFixUvaszIEaPHjRYZBAQAIfkEBAQA/wAsBgAEACYABwAACE0AAwgMMACAwYMIEypcOGCgQ4EYIkqcSLGiRQgPM2rcyFHjBQIEPoYEKbIkyZMjU5oMaWChy5cwDwqISbMmgJkKF2zYybOnz58bFiwMCAAh+QQEBAD/ACwGAAUAJgAIAAAIQwADCAwwAIDBgwgTKlz4YGCAhRAjSjwoYILFixgzatzI0aLDjyBDihRpoKTJkyhTqlxpYMHElzBjypxpsCTNgzYVBgQAIfkEBAQA/wAsBAAHACoACQAACFcAAwQAQLCgwYMIEyoEIECgwIUQIyZs6FCiRYkUG0DAwLEjBocgQ4oU6bEjhAYNRqpcyVIkBAkECFyIOVMmzZs2c9bciZOnhItAgwodanHBBqICNixYGBAAIfkEBAQA/wAsBAAKACoACQAACFkAHwwAQLAggAAIEypcyDChwYICHxpsSLGixIsPEWLcSFCARowSLogcKRIhyZMoSRowmVIChIowY8KEwAFDgZs2cd4skJPnzp5Afwq9SYGj0aNIkypdyrRpQAAh+QQEBAD/ACwEAA0AKgAKAAAIagABCBw4MEAAgggTEhRgUKHDggcfPmQYUWLChhYVUswoAICAjhRBivQ48qNHjwZLnqxgoKXLlgZfypz5ckNMmhUgGNzJs6fPn0B9aphw4ABRo0WPKk3KFKnTpU81ZJxKtarVqwlNYiX5MCAAIfkEBAQA/wAsBAAQACoADAAACGgAAQgcODBAAIIIExIUYFChw4IHHz5kGFFiwoYWFVLMeLEix4EbP0IUuRCjxgooU6I0qLKlS5UMWL4UEMGgzZs4c+rcibPBgQgJEgAVSnSo0aBHiRZVenQCyadQo0qdSlWg0Kg0IzwMCAAh+QQEBAD/ACwEABUAKgAJAAAITgABCBw4MEAAgggTEhRgUKHDggcfPmQYUWLChhYVUnw4wKDHjyBDihwJckBHkihTkhwAQIDLlzBjypxJE2bGmzhz6typ8MAEni0nHHgYEAAh+QQEBAD/ACwEABgAKgAKAAAIYgABCBw4MEAAgggTEhRgUKHDggcfPmQYUWLChhYVUsx4sSLHgRsdUsBAsiRJgyZTqkyJciWFBgZjypxJs6bNmRAkECBwYWdPnj6DAh36s6hQoxI+Kl3KtCnHBRucCtiw4GFAACH5BAQEAP8ALAQAHAAqAAoAAAhiAAEIHDgwQACCCBMSFGBQocOCBx8+ZBhRYsKGFhVSzHixIseBGx1qmECyJEmDJlOqTIlypQYIBmPKnEmzpk2aCAzo3Mmzp8+fQHlW+Ei0qNGjHHUKEABgaVOmTqNCFaDzYUAAIfkEBAQA/wAsBAAgACoACAAACFoAAQgcODBAAIIIExIUYFChw4IHHz5kGFFiwoYWFVLMeLEix4EbHWKAQLIkSYMmU6pMiXIlhgQGY8qcSbOmzZkRAEhQoGBnT54+gwId+rOoUKMABgz4yPSh0oAAIfkEBAQA/wAsBAAkACoABgAACFUAAQgcODBAAAEABCBUmHChw4QJDRKcSLHgQYUYM2rMKEFixY8CDYocSbLkSJANIGBYyRKDyZcwW7KE0ACmzZs4DV4gsJMnAZ9Aewr9OTSozwsXDAYEACH5BAQEAP8ALAQAJwAqAAUAAAhLAAcMAECwIIAACBMqXMgwocGCAhEKACBgYkWKFjNi3Hixo8aLChmIHEmypMmTKEU2XMmypcsAAgU+GPBgZk2aNnPi3HmzZ8wBCAMCACH5BAQEAP8ALAYAKAAmAAYAAAg8AAEIHEiwoMGDCBMqXMiwocOEFiJKnEixosWKBywcOBCgo8ePIEOKHBkywoINC06mRKmyJcuXK1NG+BgQACH5BAQEAP8ALAYAKgAmAAQAAAghAAEIHEiwoMGDCAUgXMgwoYCHASJKnEixosWLGDNqzBgQACH5BAQEAP8ALAAAAAABAAEAAAgEAAEEBAAh+QQEBAD/ACwKACwAHgACAAAIGwAHAABwIYDBgwgTKjQwEMAAgQQVSpx4oeGDgAAh+QQEBAD/ACwNACwAFwACAAAIFwABCBwo0ECAgwgDUCDIkKHBhAc5NAwIACH5BAQEAP8ALBUALAAJAAIAAAgJAAEIHEiw4MCAACH5BAQEAP8ALAAAAAABAAEAAAgEAAEEBAAh+QQEBAD/ACwAAAAAAQABAAAIBAABBAQAIfkEBAQA/wAsAAAAAAEAAQAACAQAAQQEACH5BAQEAP8ALAAAAAABAAEAAAgEAAEEBAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ4IDc5LjE2NDAzNiwgMjAxOS8wOC8xMy0wMTowNjo1NyAgICAgICAgIj4KIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIgogICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgeG1sbnM6Ym9keW1vdmluPSJib2R5bW92aW4iCiAgICB4bWxuczp4bXBETT0iaHR0cDovL25zLmFkb2JlLmNvbS94bXAvMS4wL0R5bmFtaWNNZWRpYS8iCiAgICB4bWxuczpzdERpbT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL0RpbWVuc2lvbnMjIgogICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjFkNzgwZGNmLWVkZTctZWU0My04N2E0LTdlMTg3YThlYTI3NSIKICAgeG1wTU06RG9jdW1lbnRJRD0iZDMxNDk3ZmItM2Y1Zi0yMzkwLTFlZDEtYjU3NDAwMDAwMDVmIgogICB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NTdiYmYyOTgtY2M5Ny02MzRlLWE4MjAtODFiMjAxY2RmZjllIgogICB4bXA6TWV0YWRhdGFEYXRlPSIyMDE5LTEyLTA1VDA5OjEzOjIyKzA1OjAwIgogICB4bXA6TW9kaWZ5RGF0ZT0iMjAxOS0xMi0wNVQwOToxMzoyMiswNTowMCIKICAgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBBZnRlciBFZmZlY3RzIENDIDIwMTggKFdpbmRvd3MpIgogICB4bXA6Q3JlYXRlRGF0ZT0iMjAxOS0xMi0wNVQwOToxMjo1MCswNTowMCIKICAgZGM6Zm9ybWF0PSLQkNC90LjQvNC40YDQvtCy0LDQvdC90YvQuSBHSUYiCiAgIGJvZHltb3Zpbjpwcm9qZWN0X2lkPSJvZWU3ZTRyM2gwaGtjZTdiODgzMyIKICAgeG1wRE06dmlkZW9GcmFtZVJhdGU9IjI1LjAwMDAwMCIKICAgeG1wRE06dmlkZW9GaWVsZE9yZGVyPSJQcm9ncmVzc2l2ZSIKICAgeG1wRE06dmlkZW9QaXhlbEFzcGVjdFJhdGlvPSIxLzEiCiAgIHhtcERNOnN0YXJ0VGltZVNjYWxlPSIyNSIKICAgeG1wRE06c3RhcnRUaW1lU2FtcGxlU2l6ZT0iMSI+CiAgIDx4bXBNTTpIaXN0b3J5PgogICAgPHJkZjpTZXE+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSI5YWE0NzI4ZC1iYWU1LTAyMDEtMjM4MC0zZTlhMDAwMDAwOGMiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTItMDVUMDk6MTM6MjIrMDU6MDAiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDphYTA2OGRlZi1hY2NhLTM5NDgtODM1Yi02MWQ1MmU2NWI3NDIiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMDgtMzBUMDE6Mzg6MTErMDM6MDAiCiAgICAgIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIEFmdGVyIEVmZmVjdHMgQ0MgMjAxOCAoV2luZG93cykiLz4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZThjY2QxNzEtNWFkZC01MzRmLWIyZjgtODc0NzNhOGMxYWJmIgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTA4LTMwVDAxOjM4OjMxKzAzOjAwIgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBBZnRlciBFZmZlY3RzIENDIDIwMTggKFdpbmRvd3MpIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvY29udGVudCIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo2ZmVmYzVhNC00YWY3LTVhNGYtYjJiYS1hMWRkYTM1YWRkMTQiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMDgtMzBUMDI6MDY6MjcrMDM6MDAiCiAgICAgIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIEFmdGVyIEVmZmVjdHMgQ0MgMjAxOCAoV2luZG93cykiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii9jb250ZW50Ii8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249ImRlcml2ZWQiCiAgICAgIHN0RXZ0OnBhcmFtZXRlcnM9InNhdmVkIHRvIG5ldyBsb2NhdGlvbiIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpmYjg3ZmQwYS00Njc2LTQ2NDMtOWZlYS03Mjk2NzllYmVhY2YiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMDgtMzBUMDI6MDY6NTYrMDM6MDAiCiAgICAgIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIEFmdGVyIEVmZmVjdHMgQ0MgMjAxOCAoV2luZG93cykiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MTBmZDdiYzMtNDllMy1hNzRjLWI0Y2UtNzI5NjYxM2NjMmYwIgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTA4LTMwVDAyOjA3OjA3KzAzOjAwIgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBBZnRlciBFZmZlY3RzIENDIDIwMTggKFdpbmRvd3MpIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvY29udGVudCIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDowMWZlOTE3MC1lYTQ1LTcyNDItOGVmNy1mMzQyNTU0ZWEwN2UiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMDgtMzBUMDI6MDc6MDcrMDM6MDAiCiAgICAgIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIEFmdGVyIEVmZmVjdHMgQ0MgMjAxOCAoV2luZG93cykiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZjJjN2ViNzEtMGJhZC03OTRiLWI4ZTAtMWVhZTkzOTM3Njk2IgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTA4LTMwVDAyOjI2OjIzKzAzOjAwIgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBBZnRlciBFZmZlY3RzIENDIDIwMTggKFdpbmRvd3MpIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvY29udGVudCIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5ZDFlN2UzNi1kZWVjLWJmNDYtOGE0Mi1kODE4YzBlMjc5YjIiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTItMDRUMTM6NDk6MDIrMDU6MDAiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii9jb250ZW50Ii8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjA1Y2RkNWI3LTM0MGMtOGM0ZC1hMWUyLTlkYWJlMjg0OTA0MyIKICAgICAgc3RFdnQ6d2hlbj0iMjAxOS0xMi0wNFQxMzo0OTowMiswNTowMCIKICAgICAgc3RFdnQ6Y2hhbmdlZD0iLyIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDozYmY3YjIzNi1kNTI3LTA0NGUtYTlkMS00MjUzY2FlZGM0N2MiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTItMDRUMTM6NDk6MjMrMDU6MDAiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii9jb250ZW50Ii8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjAxYTc1YTU2LTMyZGMtYmU0OS1hZWFkLWFjMmQ5YjNkZjJiMiIKICAgICAgc3RFdnQ6d2hlbj0iMjAxOS0xMi0wNFQxMzo0OToyMyswNTowMCIKICAgICAgc3RFdnQ6Y2hhbmdlZD0iLyIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo4OTJiYmEyYy1iMjljLWNjNDgtOTI1My0wOGE0ODYwZTY5ZDAiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTItMDVUMDk6MDE6MzArMDU6MDAiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii9jb250ZW50Ii8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmYwZTI3MTZlLWU5ZTAtYWE0ZS05ZjcwLTQxNTdjNmNlMGZlYSIKICAgICAgc3RFdnQ6d2hlbj0iMjAxOS0xMi0wNVQwOToxMzoxMSswNTowMCIKICAgICAgc3RFdnQ6Y2hhbmdlZD0iL2NvbnRlbnQiLz4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Y2I2NjE4ZDItOTcwMC01NTRjLWI5ZTktNmEzYWUxM2Q5NGYyIgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTEyLTA1VDA5OjEzOjExKzA1OjAwIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvIi8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjlkZWU2YWY2LWQ1ZWYtMzg0My04MjY5LTQyMGY1ODFlMjdlZiIKICAgICAgc3RFdnQ6d2hlbj0iMjAxOS0xMi0wNVQwOToxMzoyMiswNTowMCIKICAgICAgc3RFdnQ6Y2hhbmdlZD0iLyIvPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoxZDc4MGRjZi1lZGU3LWVlNDMtODdhNC03ZTE4N2E4ZWEyNzUiCiAgICAgIHN0RXZ0OndoZW49IjIwMTktMTItMDVUMDk6MTM6MjIrMDU6MDAiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii9tZXRhZGF0YSIvPgogICAgPC9yZGY6U2VxPgogICA8L3htcE1NOkhpc3Rvcnk+CiAgIDx4bXBNTTpEZXJpdmVkRnJvbQogICAgc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3MzNkMjZhMi1iN2I4LTA3NGItODhkNy1iOGE1OGM5ZmQwYzUiCiAgICBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjczM2QyNmEyLWI3YjgtMDc0Yi04OGQ3LWI4YTU4YzlmZDBjNSIKICAgIHN0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphYTA2OGRlZi1hY2NhLTM5NDgtODM1Yi02MWQ1MmU2NWI3NDIiLz4KICAgPHhtcE1NOkluZ3JlZGllbnRzPgogICAgPHJkZjpCYWc+CiAgICAgPHJkZjpsaQogICAgICBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjRkOTdmOTNlLWIwZjEtZjU0NC1iZmMxLWFmZThhMzEyNjkzZCIKICAgICAgc3RSZWY6ZnJvbVBhcnQ9InRpbWU6MGQyOTYzNTIwMDAwMDBmMjU0MDE2MDAwMDAwIgogICAgICBzdFJlZjp0b1BhcnQ9InRpbWU6MGQyOTYzNTIwMDAwMDBmMjU0MDE2MDAwMDAwIgogICAgICBzdFJlZjptYXNrTWFya2Vycz0iTm9uZSIvPgogICAgPC9yZGY6QmFnPgogICA8L3htcE1NOkluZ3JlZGllbnRzPgogICA8eG1wTU06UGFudHJ5PgogICAgPHJkZjpCYWc+CiAgICAgPHJkZjpsaT4KICAgICAgPHJkZjpEZXNjcmlwdGlvbgogICAgICAgZGM6Zm9ybWF0PSJhcHBsaWNhdGlvbi92bmQuYWRvYmUuYWZ0ZXJlZmZlY3RzLmNvbXAiCiAgICAgICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjRkOTdmOTNlLWIwZjEtZjU0NC1iZmMxLWFmZThhMzEyNjkzZCI+CiAgICAgIDxkYzp0aXRsZT4KICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCI+cG9ydHJhaXQtbW9kZS1zY2FubmluZzwvcmRmOmxpPgogICAgICAgPC9yZGY6QWx0PgogICAgICA8L2RjOnRpdGxlPgogICAgICA8eG1wTU06SW5ncmVkaWVudHM+CiAgICAgICA8cmRmOkJhZz4KICAgICAgICA8cmRmOmxpCiAgICAgICAgIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjBlNWU0MmUtM2U1NS0zYTQ1LTlkZDYtZjY1YzFlNzAxMDRhIgogICAgICAgICBzdFJlZjpmcm9tUGFydD0idGltZTowZDI5NjM1MjAwMDAwMGYyNTQwMTYwMDAwMDAiCiAgICAgICAgIHN0UmVmOnRvUGFydD0idGltZTowZDI5NjM1MjAwMDAwMGYyNTQwMTYwMDAwMDAiCiAgICAgICAgIHN0UmVmOm1hc2tNYXJrZXJzPSJOb25lIi8+CiAgICAgICAgPHJkZjpsaQogICAgICAgICBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOmFjZDllMjg3LWZjMzEtMWQ0Ni1hNzdmLTQ1NjQ1ZmFhNWUwYyIKICAgICAgICAgc3RSZWY6ZnJvbVBhcnQ9InRpbWU6MGQyODU3NjgwMDAwMDBmMjU0MDE2MDAwMDAwIgogICAgICAgICBzdFJlZjp0b1BhcnQ9InRpbWU6MTA1ODQwMDAwMDBmMjU0MDE2MDAwMDAwZDI4NTc2ODAwMDAwMGYyNTQwMTYwMDAwMDAiCiAgICAgICAgIHN0UmVmOm1hc2tNYXJrZXJzPSJOb25lIi8+CiAgICAgICAgPHJkZjpsaQogICAgICAgICBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOmQwMDE4YzVkLWU2MDEtZWM0NS1hZWQ5LTdhZTNjZTViNmIzZCIKICAgICAgICAgc3RSZWY6ZnJvbVBhcnQ9InRpbWU6MGQyOTYzNTIwMDAwMDBmMjU0MDE2MDAwMDAwIgogICAgICAgICBzdFJlZjp0b1BhcnQ9InRpbWU6MGQyOTYzNTIwMDAwMDBmMjU0MDE2MDAwMDAwIgogICAgICAgICBzdFJlZjptYXNrTWFya2Vycz0iTm9uZSIvPgogICAgICAgIDxyZGY6bGkKICAgICAgICAgc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDplODdiN2UyOC02NTQ5LTM5NGEtODNjOS05ZjdkOTUyNDJjNmUiCiAgICAgICAgIHN0UmVmOmZyb21QYXJ0PSJ0aW1lOjBkMjk2MzUyMDAwMDAwZjI1NDAxNjAwMDAwMCIKICAgICAgICAgc3RSZWY6dG9QYXJ0PSJ0aW1lOjBkMjk2MzUyMDAwMDAwZjI1NDAxNjAwMDAwMCIKICAgICAgICAgc3RSZWY6bWFza01hcmtlcnM9Ik5vbmUiLz4KICAgICAgICA8cmRmOmxpCiAgICAgICAgIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ZThlY2VkNGMtNWVjZi0xNTQ1LWI3ZGYtNmViNmMwNjQxNGZiIgogICAgICAgICBzdFJlZjpmcm9tUGFydD0idGltZTowZDI5NjM1MjAwMDAwMGYyNTQwMTYwMDAwMDAiCiAgICAgICAgIHN0UmVmOnRvUGFydD0idGltZTowZDI5NjM1MjAwMDAwMGYyNTQwMTYwMDAwMDAiCiAgICAgICAgIHN0UmVmOm1hc2tNYXJrZXJzPSJOb25lIi8+CiAgICAgICA8L3JkZjpCYWc+CiAgICAgIDwveG1wTU06SW5ncmVkaWVudHM+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICAgIDwvcmRmOmxpPgogICAgIDxyZGY6bGk+CiAgICAgIDxyZGY6RGVzY3JpcHRpb24KICAgICAgIGRjOmZvcm1hdD0iYXBwbGljYXRpb24vdm5kLmFkb2JlLmFmdGVyZWZmZWN0cy5sYXllciIKICAgICAgIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjBlNWU0MmUtM2U1NS0zYTQ1LTlkZDYtZjY1YzFlNzAxMDRhIj4KICAgICAgPGRjOnRpdGxlPgogICAgICAgPHJkZjpBbHQ+CiAgICAgICAgPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ij5wYXBlcjwvcmRmOmxpPgogICAgICAgPC9yZGY6QWx0PgogICAgICA8L2RjOnRpdGxlPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgICA8L3JkZjpsaT4KICAgICA8cmRmOmxpPgogICAgICA8cmRmOkRlc2NyaXB0aW9uCiAgICAgICBkYzpmb3JtYXQ9ImFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5hZnRlcmVmZmVjdHMubGF5ZXIiCiAgICAgICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmFjZDllMjg3LWZjMzEtMWQ0Ni1hNzdmLTQ1NjQ1ZmFhNWUwYyI+CiAgICAgIDxkYzp0aXRsZT4KICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCI+bGluZS1zY2FubmluZzwvcmRmOmxpPgogICAgICAgPC9yZGY6QWx0PgogICAgICA8L2RjOnRpdGxlPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgICA8L3JkZjpsaT4KICAgICA8cmRmOmxpPgogICAgICA8cmRmOkRlc2NyaXB0aW9uCiAgICAgICBkYzpmb3JtYXQ9ImFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5hZnRlcmVmZmVjdHMubGF5ZXIiCiAgICAgICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmQwMDE4YzVkLWU2MDEtZWM0NS1hZWQ5LTdhZTNjZTViNmIzZCI+CiAgICAgIDxkYzp0aXRsZT4KICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCI+bWFzazwvcmRmOmxpPgogICAgICAgPC9yZGY6QWx0PgogICAgICA8L2RjOnRpdGxlPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgICA8L3JkZjpsaT4KICAgICA8cmRmOmxpPgogICAgICA8cmRmOkRlc2NyaXB0aW9uCiAgICAgICBkYzpmb3JtYXQ9ImFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5hZnRlcmVmZmVjdHMubGF5ZXIiCiAgICAgICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmU4N2I3ZTI4LTY1NDktMzk0YS04M2M5LTlmN2Q5NTI0MmM2ZSI+CiAgICAgIDxkYzp0aXRsZT4KICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9IngtZGVmYXVsdCI+ZnJhbWU8L3JkZjpsaT4KICAgICAgIDwvcmRmOkFsdD4KICAgICAgPC9kYzp0aXRsZT4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgICAgPC9yZGY6bGk+CiAgICAgPHJkZjpsaT4KICAgICAgPHJkZjpEZXNjcmlwdGlvbgogICAgICAgZGM6Zm9ybWF0PSJhcHBsaWNhdGlvbi92bmQuYWRvYmUuYWZ0ZXJlZmZlY3RzLmxheWVyIgogICAgICAgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDplOGVjZWQ0Yy01ZWNmLTE1NDUtYjdkZi02ZWI2YzA2NDE0ZmIiPgogICAgICA8ZGM6dGl0bGU+CiAgICAgICA8cmRmOkFsdD4KICAgICAgICA8cmRmOmxpIHhtbDpsYW5nPSJ4LWRlZmF1bHQiPkJhY2tncm91bmQ8L3JkZjpsaT4KICAgICAgIDwvcmRmOkFsdD4KICAgICAgPC9kYzp0aXRsZT4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgICAgPC9yZGY6bGk+CiAgICA8L3JkZjpCYWc+CiAgIDwveG1wTU06UGFudHJ5PgogICA8eG1wRE06dmlkZW9GcmFtZVNpemUKICAgIHN0RGltOnc9IjUwIgogICAgc3REaW06aD0iNTAiCiAgICBzdERpbTp1bml0PSJwaXhlbCIvPgogICA8eG1wRE06ZHVyYXRpb24KICAgIHhtcERNOnZhbHVlPSIyOSIKICAgIHhtcERNOnNjYWxlPSIxLzI1Ii8+CiAgIDx4bXBETTpzdGFydFRpbWVjb2RlCiAgICB4bXBETTp0aW1lRm9ybWF0PSIyNVRpbWVjb2RlIgogICAgeG1wRE06dGltZVZhbHVlPSIwMDowMDowMDowMCIvPgogICA8eG1wRE06YWx0VGltZWNvZGUKICAgIHhtcERNOnRpbWVWYWx1ZT0iMDA6MDA6MDA6MDAiCiAgICB4bXBETTp0aW1lRm9ybWF0PSIyNVRpbWVjb2RlIi8+CiAgPC9yZGY6RGVzY3JpcHRpb24+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAOw=="
                        style="opacity: 0.3;"> --}}
                    <div id="qr-reader"></div>
                    <p id="login_mobile_scan_qrcode"></p>
                    <p id="qrcodedoLogin"></p>
                </div>
            </div>
        </div>
    </x-app-layout>

    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <script>
        $(document).ready(function() {
            // ================= OLD ===============
            function qrcodedoLogin(param) {
                var url = param;
                console.log("qrcodedoLogin called", url);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: url,
                    data: {
                        //key:key
                    },
                    success: function(data) {
                        if (data.status == 1) {
                            var qrcodeloginurl = data.msg;
                            //scan successfull url recieved

                            $('#qrcodedoLogin').text("QR Loggin successfully");
                            // console.log("qrcodeloginurl",qrcodeloginurl);
                            //qrcodedoLogin(qrcodeloginurl);

                        } else if (data.status == 2) {
                            //couldn't do login
                            // alert(data.msg);
                            $('#qrcodedoLogin').text(data.msg);
                        }
                    }
                });
            }

            function login_mobile_scan_qrcode(param) {
                alert("Mobile");
                var url = param;
                if ("WebSocket" in window) {
                    var base = window.location.hostname;
                    var ws = new WebSocket('ws://' + base + ':8090');
                    //var ws = new WebSocket('wss://'+base+':8090');
                    ws.onopen = function() {
                        console.log("on WS open we sent the token to server");
                        let params = (new URL(url)).searchParams;
                        let urltoken = params.get('t');
                        ws.send(JSON.stringify({
                            type: "client",
                            step: 0,
                            token: urltoken
                        }));
                    };
                    ws.onmessage = function(event) {
                        const data = JSON.parse(event.data);
                        console.log(" client body", data);
                        const step = data.data && data.data.step;
                        if (step === 0) {
                            console.log("step", step);
                        } else if (step === 1) {
                            ws.send(JSON.stringify({
                                type: "client",
                                step: 1,
                                username: '{{ Auth::user()->name }}'
                            }));
                        }
                    }
                    ws.onclose = function() {
                        console.log("Connection is closed...");
                    };
                } else {
                    alert("WebSocket NOT supported by your Browser!");
                }
                console.log("login_mobile_scan_qrcode called", url);

            }

            function docReady(fn) {
                // see if DOM is already available
                if (document.readyState === "complete" ||
                    document.readyState === "interactive") {
                    // call on next available tick
                    setTimeout(fn, 1);
                } else {
                    document.addEventListener("DOMContentLoaded", fn);
                }
            }

            docReady(function() {
                var resultContainer =
                    document.getElementById('qr-reader-results');
                var lastResult, countResults = 0;

                function onScanSuccess(decodedText, decodedResult) {
                    if (decodedText !== lastResult) {
                        ++countResults;
                        lastResult = decodedText;
                        // Handle on success condition with the decoded message.
                        console.log(`Scan result ${decodedText}`,
                            decodedResult);
                        resultContainer.innerHTML += `<div>[${countResults}] -
    ${decodedText}</div>`;

                        login_mobile_scan_qrcode(decodedText);
                        // Optional: To close the QR code scannign after the
                        // result is found
                        // html5QrcodeScanner.clear();
                    }
                }

                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "qr-reader", {
                        fps: 10,
                        qrbox: {
                            width: 250,
                            height: 250
                        },
                        rememberLastUsedCamera: false
                    });
                html5QrcodeScanner.render(onScanSuccess);
            });
        });
    </script>
</body>

</html>
