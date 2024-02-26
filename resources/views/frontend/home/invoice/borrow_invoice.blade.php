<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Books Invoice</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }

        .font {
            font-size: 15px;
        }

        .authority {
            /*text-align: center;*/
            float: right
        }

        .authority h5 {
            margin-top: -10px;
            color: green;
            /*text-align: center;*/
            margin-left: 35px;
        }

        .thanks p {
            color: green;
            ;
            font-size: 16px;
            font-weight: normal;
            font-family: serif;
            margin-top: 20px;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
        <tr>
            <td valign="top">
                <!-- {{-- <img src="" alt="" width="150"/> --}} -->
                <h2 style="color: Red; font-size: 26px;"><strong>RakayLibrary</strong></h2>
            </td>
            <td align="right">
                <pre class="font">
               Rakaya Head Office
               Mob: 1245454545 <br>
               Makkah, Al-Zaidy <br>

            </pre>
            </td>
        </tr>

    </table>


    <table width="100%" style="background:white; padding:2px;"></table>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">BookName</th>
                                <th scope="col" class="px-6 py-4">Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowed_books as $borrowed_book)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $borrowed_book->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $borrowed_book->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $borrowed_book->author }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br />

    <table class="table test_table" style="float:right; border:none">

    </table>


    <div class="thanks mt-3">
        <p>Thanks For Your Booking..!!</p>
    </div>
    <div class="authority float-right mt-5">
        <p>-----------------------------------</p>
        <h5>Authority Signature:</h5>
    </div>
</body>

</html>
