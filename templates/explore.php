<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  /* background-color: #4CAF50; */
  background-color: rgb(44, 39, 39);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  height: 70px;
  width:200px;
  margin-left:18cm;
  margin-top: -1cm;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPP</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/49dfca48a6.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"/>
      <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
  <body >

    <!-- JAVASCRIPT FOR TOGGLE MENU-->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
        navLinks.style.maxHeight = "150px";
      }

      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
<section id="subs">
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-16">
          <h1 class="sm:text-5xl text-2xl font-extrabold title-font mb-4 text-gray-900">
            YOU CAN PERFORM
          </h1>
          <br>
          <div class="card-deck">
            <div class="card">
              <img src="https://th.bing.com/th/id/OIP.37xmm0fAuGEsQEcWBFrydgHaDF?pid=ImgDet&rs=1" style="width:300px; height:120px;" class="card-img-top" alt="...">
              <div class="card pop-card pop-trans">
              <div class="card-body">
                <h5 style="font-weight:bold; color:black;" class="card-title">VIEW</h5>
                <p class="card-text">View all projects</p>
                <a href="sample.php"><br><br>GO THERE</a>
              </div>
              </div>
            </div>
            <div class="card">
              <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCADaANoDASIAAhEBAxEB/8QAHAABAAEFAQEAAAAAAAAAAAAAAAcCAwQFBgEI/8QAUBAAAQMDAAUECg0JBwUBAAAAAQACAwQFEQYSITFRIkFhcRMUFUJVgZGSodIHFyMyMzVSVHSUsbLBFjZicnWztNPwJDRDY4Ki0SVzg5PC4f/EABoBAAIDAQEAAAAAAAAAAAAAAAAGAgQFAwH/xAAxEQACAgEBBgIJBQEBAAAAAAAAAQIDBBEFEiExQYETYRQiMlFxscHR8CMzNEKhkRX/2gAMAwEAAhEDEQA/AJbREQAREQAREQARWKmqpKOJ09VMyGJu9zzjJ4AbyegBchctMpHF0dri1BtHbFQ0F56WRbh489Ss0YtuQ9K136FXIy6sdfqPt1Oymnp6eN0tRLHFGN75XNY3yuK5+r0vs0Gs2nE1W8bjG3scXnybfI0rg6ipq6uQy1U8s0nypXF2OhoOweIKyt6nY8I8bXr8jAv2zZLhUtP9Z01Tpld5MinhpqdvMSHTSDxuIb/tWrmv2kE+de41IzzRObEPJEAtai04YlFfswRlzzL7Pamyp8s0p1pJHvdnOXuLjnxlU7eKIrK4FU9BcCCCQRuIOD6FmQ3a804aIbhVsa3c3srnNH+l+R6FhIoyhGfCS1JxnKHGL0Ogg0uv8OOyvp6gcJog0+dEW/YtzS6aUT8NrKSaA7i+EiZnWQcO9BXDIqVmzsaznHT4cC7XtLJr/tr8eJLdJcbbXtzSVUM3OWtdiQD9JjsOHkWWoaa57HNexzmvactcwlrgeII2robdpZdKTVZVf2yEYHuh1Z2jokG/xg9ayL9jzjxpevkzYx9swlwuWnmiREWut14tl0bmllHZGjL4ZOTMzrbw6RkLYrEnCUJbslozchONi3ovVBERRJhERABERABERABERABaC9aSUds1oIQ2ordvuYPucPAzOHP0Db1ZytdpBpOYjLQ2yT3QZZPUtOdQ7iyE8eJ5ubbtbxJJJJJJJJJJJJJO8klbuDszxNLLuXuMDP2p4bddPP3/AGMmtrq64TGermdI/vQdjIx8ljRsAWMiJljFQW7FaIWZScnvSerCIi9IhERABERABERABERABERAFUb5Inskie5kjCHMexxa5pHOCNq7GzaW51Ka7EA7AyrAwCf85o3dY8nOuMRVsjFryI6TXctY2VZjy3oPt0Jla5rmtc0gtcA5pByCCMggheqN7HpFUWtzKefXlt5O1u98Ge+i6OLfJ0yJDNBURRTQSNkilaHxvYctc084Sjl4c8WWkuXRjhiZkMqOseD6ouIiKmXQiIgAiIgAuP0n0gMXZbZQyYkwW1kzDtZnfEwjn+Uebdv97sdJL13MphDA4du1TXCLGMwx7jKRx5m9P6qjgkkkkkkkkknJJO0kkrd2Zgqz9axcOhgbUznX+jW+PX7BERMwrhERABERABERABERABERABERABERABERABbuwX2W0zCKYufb5XZlZvMLj/ixj7w5+vfpEXO2qF0HCa1TOtVs6ZqcHo0TIx7JGMkjc1zHta9jmkFrmuGQQRzKpcJopezBIy11T/cZXf2Nzj8HKdvYieDu96dnOu7yknKx5Y1jhLsPGLkxya1OPcIiKsWgrFVUwUdPUVU5xFAwvfxONzR0ncOtX1xOmVyLnwWuJ2yPVqKrHO8j3Nh6hyj1jgrOLQ8i1Vrv8Crl5Cx6nY+3xOYrq2e4VVRVznlyuyGg7I2DY1jegD+tqxkRPMYqKUVyQiSk5NylzYREXpEIiIAIiIAIiIAIi29LYLhV2mW6xg4z2SmhwdeemaDrSt59u9g5wM98FztuhUk5vTU610ztbUFrpxNQib9oRdDkEREAEREAEREAEREAOnJBG0EHBBHOCFJmjt17qULeyuBq6bENTxcccmX/AFfaCozWzsVyNsuNPM44glIgqhzdieca3+k4Pl4rP2hjekVPTmuK+xo7OyvR7lryfB/fsSmi8G3gvUmDsWp5oqeGeeU4jgifK8/osBccKJKmolq6ioqpfhJ5Xyu6C45wOgbh1LvNL6vsFsbTtOH1szYyP8qP3R3/AMjxqPUz7Hp3YO19RW2zfvWKpdPmwiItwwQiIgAiIgAiIgAmECt0tPWXyvitFudjsnKq6kDLYadpw9/VzDiSBu2rnbbGmLlI7U0yukoRNto9aHX6teHA9yKKQCtkGQKuYDWFLGfk7jIeGB32VKYa1oDWgANADQBgADYAAFi2630dro6aho49Snp2arAdrnE7XPeedxOST0rLSXlZUsme9Ll0HbFxo41e5HucBpRZO05XXClYBSTv93Y0bIJnHeB8l3oPWMcwpimhhnilhmY2SKVhZIx25zXDBBUX3m0zWmrdCdZ1PJrPpZT38edrXH5Tdx8R51u7LzfEj4M3xXLzQv7UwvCl40FwfPyZrURFtmGEREAEREAEREAEwOfdzoi9AkvRivNdaoA92ZqQ9qyknadQDUcesYW7UfaG1fYbjPSOOGVkBLf+7DyhjrBd5FICSdoU+DfJLk+P/R32dd42PFvmuBwGmVT2S5U9MDyaWmaSOEkxLj6A1cytlfpjPebs/OcVLoh1QgRfgtamzEh4dEI+QpZk/EvnLzCIislUIiIAIiIAIAi1tZV6wdDC7knZI8d9+i3o4/1mFlirWrOldbseiK6ieeokZRULHTSzPbC0RbXTSOOAxnRxP4DbK2jGj8NgoBG7UfXVOpLXzN3OkA2RsJ26jNzfGe+UK4wiwcuM8nnLRDBiThjco6s+iM42nZ14Xq+f7ftuNpB3G40H8RGvoDj1lYt9HgtLXXU2se/xk3ppoFgXW2091o5KaXku9/DIACYpQNjx9hHOFGGn35xSdNDR5/3hc5TUr6l23LYmnD38T8lvSrePhzluzhLRlPIzYR3oTjquR0NVTVFHPNTVDNSaFxa8c3EFp4HeOtWVSxjI2NYxoa1owAOZVJvjrot7mJ8tNXu8giIvSIREQAREQAREQBk2+oNJX26pzgQ1ULnfqFwY/wBBKlxQw4Za4cQQOtS3Q1cU1FQSueNaWlp5HbRvdG1xS9tqvXcmvNDHsWzTfg/JkUSPdLJLI4nWke95zxcSVSnFEw6aC4EREAEREAFsrRZ6u9dudqTUze1JI45ezGQZc9uuA3Uad3OtHUVBbrRxnlbQ9w73ob0/11dp7HP93vv0ql/clZ2dlSprbr5mngYsbrFGzkYlRoRpHIzscVVbGtd78l9TrEfJGI93H+s4XtdaR/PLV51T/LUqLA7s2HwtbfrlP6yXZZ+RY9X8hjjs/HrWi+ZHPtdaR/PLV59V/KWrvOiV2sVIysrKiikjfUMpmtpnTF+u9r35PZGAY5JUtd2bB4Wtn1yn9dcnp7cLZV2amjpa6jnkFygeWU9RFK8MEMwLi1jicbR5VKrJulNKXL4EbcaqEHKPP4kdW/4xtH7RoP4iNfQHFQBbx/1G0/tGg/iI1P8AxXmf7UT3Z/syIq00pH1GkkhdlsTaKj1nDe48vkt/ErXwRNfNQUcZjY+qqIqSnByGh7zqgnGTgc//AOrd6azxU92ke/aTS0wY0b3u5WwdHErlLTU61+sVRUSMYyO5Uj3ue4Mjija/JyXHAA61tUWRoxouPtNGLfW78qSl7KZ2v5F3v5zb/On/AJafkVe/nNv86f8Alrse7Vg8LWz67T+undqweFrZ9dp/XWV/6mV+I1f/ACsX8Zx35FXv5zb/ADp/5as1Oid2pKepqZZ6Ix08UkzxG6YuLWDJDdZgHpUgwVNJVR9lpaiCeLWczslPIyVms3YRrMJGRzrEvXxRePoNT9wr2G1MhzUW1z9xCzZWNGDkk+XvIpRETaKQREXgBERABbCO51UcccbXP1WMawYdzNGFr16hxUuaPVJx5MEEFwO8Eg9YXizbtCKe6XSEDDWVc2qODXHXb6CFhKMJKcVJdSU4uEnF9AiIpEAsaon1csjPK3OcOboHT/XV7NNjLGHlbQ4jm6AsXC4WWdEWKq+rLakH2OvgL79Kpf3JUfkKQPY7+Avn0qm/dFY+ev0H2+ZtYH767/I7l3vX/qu+wr5/AGBsG4fYvoB3vXfqu+wqAAOSOofYqWzf7dvqXNpf17/QoIHALwgcFXhUkLVaMtF63/GFp/aNB/ERqfuPjUA0TmMrrY95DWR19E97jua1s7CSepT7x6ysbaHtRNrZz9WREWn5P5Qv4Cho8f71yi6nT1zHaRThpBMdHRseB3rtVz8HxEHxrlldo/aj8DPyP3ZfEYHAehMDgPIERdjiS17HuzR4ftCu++Fv718UXj6DU/cK0Pse/m8Pp9b94LfXr4ovH0Gp+4Vhy/kd/qby/j9voRSiInoQwiIvACIiACvNgnc1rgzIIBB6CrBIAceAJ8ikq32WkNBbjJG3XNHTa+QM63Y25VPLy44yTfUuYuJLJbUehy2l0BhvD5cbKqnhmGN2WgxH7o8q59dzppS69LRVjRtp5nQyY36kwyCfGAPGuGUNnWeJjRfu4f8ADptKvw8mXnx/6FZllxlreokfgvXvxlrT1n/hWCFblLoipCPVlCpVZC8IVdosplsrv/Y8+Avn0qm/dFcEQu+9j34C+fSqb90Vn7Q/Yl2+Zo7Pf667/I7d3vXfqu+wqAwOSOoKfHe9d+q77CoEG4dQVDZn9u31L21P6d/oUEKlXCFSQtbQyEy2QNx2gjaugpdMdKKOlbSRVcbmRsDIpJ4WyzRtG4B7t+ObIK0K8IXKdcZ8JLU7wslDjF6Hk0s08ks00j5JZXmSSSQlz3vdtLnEq0VcIVJRpoGupSiEIos9Jb9j383h9PrfvBb69fFF4+g1P3CtD7Hv5vD6fW/eC316+KLx9BqfuFYUv5Hf6m8v4/b6EUoiJ6EMIiLwAiIgCuCE1M9NTN99UzwwD/yPDT+KmEHVAa0cloDR1DYo30UpO2bzA8jLKKOSqdndrkdiYPKSfEpJSxtmxOyMPcvmNOxamq5We9/IxbjRtr6GtpD/AI8LmsJ3CQcph8RAKiKTXY58bgWva5zHg72uacEKaFG+l1u7UuPbbG4grw6TZubO3AkHj2O8Z4I2RfuydL68T3bGPvRVy6cGcyQqVcIVJCYWhdTKCFRhXMKkhQaJplBXe+x98Be/pNN+6K4MhdroPW2+jhu4q6umpzJUU7mComjjLgIiCWh5CztoRboaXl8zR2fJK9a+Z3zgS1wGMkEDPSFGg9j6+YH9vt24d7Uf8LvO7Vg8K2363B6yd2tH/Ctt+twessCmy6nXcXPyGC6um7TffLzOD9r6+fP7d5tR/wALz2vb58/t3m1Hqrve7Wj/AIWtv1uD1k7t6P8Aha2fXKf1l39LyfxHD0PG/GcB7Xl8+f27zaj1U9ru+/P7b5tR6q77u3o94Wtn1yn9ZO7ej3he2fXKf1l56XkfiPViY/4yP/a6vvhC2+bUeqvPa5vvhC2+bUeqpB7uaPeF7X9cp/WTu5o74Xtf1yn9ZeelZH4iXouP+Mj72uL94Qtvm1Pqrz2t794Qtnm1PqqQu7mjnhi1/Xaf1k7u6OeGLX9dp/WUfSr/AMR76NR+MxNF7PVWO19o1MsMsvbNRPrQB4ZqyOBA5e3KzL18UXj6DU/cK87u6OeGLV9dp/WWDdbzYprbc4YbpbpJpaSoZHHFVQPke4sOGta12SVygpytUmup1scI1OKfR/IjjYmxET4II2JsRF4A2IiyKKjluFXSUUWQ6okDXOHeRjlPf4hn+ivJSUU5PkiUYuTUVzZ2+htF2C3y1jxy6+TWZx7BFljPKdY+NdOrcMUcEUMMTQ2OKNkUbRzMYA0BXEiZFzvtlY+o/Y9KoqjWugWuvNtZdaCeldgSYElO895M3OqT0HcegrYouUJOElKPNHScFOLjLkyFpI5InyRyMLJI3ujkY7YWvacEFUYXcaX2XObtTN3ANrmgbwMBs2Ojc7xHmXEEJ0xr45FanHuJOTjyx7HCRQQqVcwqSF3aOKZbIVJCuFUkKLJoox0KkhVkLwhc2iaZRhUEdCuKlRZNMowqSFWQvFBomWyOpU4VwhUkLmySZQQqSFWvA1ziGtBc5xwAN5KjoTTKA1zi1rWlznHDQN5K29LSspxrHDpXDlOG4D5Lehe01M2BuTgyuHKdwHyW9CyFepp3fWlzKN1+/wCrHkERFZKgREQAXdaH2owU77nO3EtY3Upg4bWU2c63W87eoBc5YLO671gDwRRUxa+rdzPO9sDTxPfdHWpNaGtDWtAAAAAAwABsAAWBtbL0XgQ5vn9hg2Ribz8efJcvuVIiJbGcIiIA8c1rmua4AtcC1wcAQQdhBBUbaRWJ1rmM9Owm3zP5GNva7z/hOPD5J8XNtkpW5oYaiKWCeNskUrSyRjxlrmnmIVzEypY095cuqKWZiRyYbr5rkyGCvFv79o/UWmR00WvLb3u9zkO10JO6OX8Dz9e/RJvqthdFTg9UJ1tU6ZuE1o0WyqVcKpIUmjx
			  MoKoKuYXhCg0TTLZCpVa8IUGiaZQVSQqyvCoNE0y2qSFcIXgBcQ0Akk4AHOotE9S2GucWtaMuJwAN5Wyp6dsIycGRw5R4DgF7BA2EZODI7eeA4BXlaqq3fWfMp23b3qrkERF3K4REQAWVb6CrudVHSUw5TuVLIRlkEWcGR/4DnPoUFvrbnUNpqRms7YZZHZ7FAw9/IR6BvPpEmWq1UdpphBTgl7iHzzOA7JNJ8p2ObgOb7c3Ozo40d2PGT/w08DAlky3pcIr/AEu2+gpbbSw0lM3EcYyXHGvI8++e88T/AFuWWiJPlJye9LmOUYqKUY8kERF4SCIiACIiAKXsjkY+ORjXse0te14DmuadhBB2YXCXvRKWAyVVqa6SHa59LtMsY5zETvHRv69w71CrOPk2Y8t6D7FXJxa8iOk13IVI3g5yCQQd4I2EEKkhSjdtG7bdNaXV7XqyP7xCBl5/zW7j9vSuEudhu9rLnTwmSnG6op8vixxePfN8Y8aZ8bPqyOGuj932FfJwLcfjpqvf9zTkKkhXNh3bR0KkhXWikmWyFThXFSQoaE9SghUkKshNUuOAMk7lBommW9UkgAEk7AAs2GFsQydrzvPAcAvY4hGM73EbTw6Ari7wr04sr2Wa8EERF1OIRFkUdFX3CTsVFTyTuBAcW7I2Z+XI7kjyryUlFayeiJRi5PSK1Zjrb2ewV93c2QZgoQeXUvbteBvbA07z07uvcujtWh9LAWT3NzamUYLYGZ7WYf0s7XHrwOhdUGhoAaAABgAAAADmACwcvayXqUcX7/sb2Jshv17+C933Maht9FbadlNSRBkY2uJ2vkfja+Rx2klZaIlyUnJ70uYyxiorditEERF4SCIiACIiACIiACIiAC8IBzu3YXqIA0Vw0WsVeXvEJpp3bTLSER5PF0ZBYfIuXrNCrvDrOpJYKtnM1x7BN5HZYfOCkVFdqz76VoparzKNuz6LeLWj8iG6q23SjJ7aoaqIA++dE4s89mW+lYWsw7nNPUQpwWFXUFtmildNRUkjtV3Klgied3FzVqU7Uc3pKP8AplXbLVa1jL/CHMZIAG1X44wwcXHefwCz66KGOplbHGxjQ9wAY1rQBngFirerSa3jAsbT3TxeEtG8gdZwr8DWulYHAEHeCAR6VIVkt9sNNHIaGj7JgcvsEWtu46uVC+7wY72mpKinxp7uuhHUMFTUnVpoJ5zwgifJ6WjHpW5pdFNIKnBfFFSsO91U8F+OiOLJ8pCkjAaGtaA0DcGjA8gVSwLds2PhCKX+jDTsarnOTf8AhzFFobaoMPrJJax4713uUH/rYcnxuK6OKKCBjIoY4442bGsjaGMA6Gt2K4iybci2562S1NinHqoWlcdAiIuB3CIiACIiACIiAP/Z" style="width:300px; height:120px;" class="card-img-top" alt="...">
              <div class="card pop-card pop-trans">
              <div class="card-body">
                <h5 style="font-weight:bold; color:black;" class="card-title">UPLOAD</h5>
                <p class="card-text">Upload projects which<br>you have done</p>
                <a href="index.php">GO THERE</a>
              </div>
              </div>
            </div>
            <div class="card">
              <img src="data:image/jpeg;base64,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" style="width:300px; height:120px;" class="card-img-top" alt="...">
              <div class="card pop-card pop-trans">
              <div class="card-body">
                <h5 style="font-weight:bold; color:black;" class="card-title">SEARCH</h5>
                <p class="card-text">Search for projects of others to get idea to proceed</p>
                <a href="searchindex.php">GO THERE</a>
              </div>
              </div>
            </div>
			<div class="card">
              <img src="https://th.bing.com/th/id/OIP.igAl06FZ0ohPEfYBHbw0wwHaE_?w=237&h=180&c=7&r=0&o=5&pid=1.7" style="width:300px; height:120px;" class="card-img-top" alt="...">
              <div class="card pop-card pop-trans">
              <div class="card-body">
                <h5 style="font-weight:bold; color:black;" class="card-title">FEEDBACK</h5>
                <p class="card-text">Give Feedback for others projects</p>
                <a href="feedback_display.php"><br>GO THERE</a>
              </div>
              </div>
            </div>
          </div>
      </div>

    </section>
   
    

  
  </section> 

  <button  onclick="window.location.href='Studentprojectportfolio.html'" class="button">Logout</button>
    
  </body>
</html>
