<!DOCTYPE html>
<html>
   <head>
      <title>The Pig's Coven</title>
      <link href="./styles/main-theme.css" type="text/css" rel="stylesheet" />
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="./jscript/funcs.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="container">
         <header>
            <img id="header-img" src="./images/pigs-coven-logo-100.jpg" />
            <div id="header-title"><?= "The Pig's Coven Est. 1965"; ?></div>
         </header>
         <div id="navmenu">
            <ul>
               <li><a href="./">HOME</a></li>
               <li><a href="javascript:void(0);" onclick="startGetHTMLContent(0);">Catalog</a></li>
               <li><a href="javascript:void(0);" onclick="startGetHTMLContent(2);">About Us</a></li>
            </ul>
         </div>
         <aside>
            <?php include ("./aside.php"); ?>
         </aside>
         <main>
            <div id="outval"></div>
            <p>Welcome to The Pig's Coven, the premier destination for seekers of the arcane and adventurers of every stripe, where nature's rarest blooms are transformed into powerful potions and mystical elixirs. Nestled in the heart of a realm where magic and nature entwine, our shop specializes in harnessing the extraordinary properties of the most elusive flowers, procured from the depths of enchanted forests and the edges of dangerous swamps. Each potion is crafted with utmost precision and a deep reverence for the ancient arts of herbal alchemy, ensuring that our brews meet the diverse needs of both heroes and those who walk a more shadowed path.</p>
            <p>At The Pig's Coven, we pride ourselves on offering an unmatched selection of potions and elixirs designed to aid in your quests or further your darker ambitions. From life-saving brews that bolster strength and vitality to those that grant the user uncanny abilities such as invisibility or necromantic power, our range caters to every conceivable endeavor. Whether you seek the fiery heart of a Thorny Volcano Phoenix for courage or the sinister capabilities of the Death's Stairway, our skilled alchemists are here to guide you through our curated collection, ensuring that each potion aligns with your purpose and intent.</p>
            <p>Our commitment to both quality and the ethical practice of ancient alchemy ensures that each visit to The Pig’s Coven is a unique experience, rich in knowledge and magical discovery. We invite you to explore the potent synergies of nature and magic, and to trust in our expertise as you prepare for your next great adventure—or quietly plot your next dark strategy. Discover the myriad possibilities that await within our hallowed halls, and let The Pig’s Coven be your ally in the enchanting world of herbal alchemy.</p>
         </main>
         <footer>
            2020 - 2024 &copy; All Right Reserved to The Pig's Group of Companies Ltd.
         </footer>
      </div>
   </body>
</html>