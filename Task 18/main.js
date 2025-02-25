// Create an array of quotes.
// Display a random quote from the array when the button is clicked. 

const genQuote = document.querySelector("#genQuote");
const quoteContent = document.querySelector("#qoute_content");

const quotes = [
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
    "Believe you can and you're halfway there. - Theodore Roosevelt",
    "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
    "The best way to predict the future is to create it. - Peter Drucker",
    "Don't watch the clock; do what it does. Keep going. - Sam Levenson",
    "The only thing we have to fear is fear itself. - Franklin D. Roosevelt",
    "The only thing necessary for the triumph of evil is for good men to do nothing. - Edmund Burke",
    "The greatest glory in living lies not in never falling, but in rising every time we fall. - Nelson Mandela",
    "The only thing we have to fear is fear itself. - Franklin D. Roosevelt"
]

genQuote.addEventListener("click", function(){
    let randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    quoteContent.innerHTML = randomQuote;
})

const sarcasticQuotes = [
    "Oh wow, you're so original. I've never heard that before!",  
    "Yes, because ignoring a problem always makes it go away.",  
    "Wow, tell me more about how much you don’t care—right after this three-hour rant.",
    "Oh no, please, take your time. I have nowhere else to be... except anywhere else.",
    "Your opinion is very important to me. Just kidding, it's not.",
    "I love it when people explain things that I already know. So helpful!",
    "Oh sure, let’s add ‘meeting’ to this email. That’ll definitely solve the problem.",
    "Yes, please continue talking. I always yawn when I’m fascinated.",
    "Wow, another motivational quote. My life is changed forever!",
    "Oh look, a ‘life hack’ that takes more time than doing it normally!",
    "Of course, I’d love to hear your unsolicited opinion on everything.",
    "Oh good, another person who thinks they’re a genius because they Googled something.",
    "No, really, tell me again how ‘busy’ you are while doing nothing.",
    "Wow, that’s such a great idea! Let me write that down... in my *never gonna happen* list.",
    "Oh, I just love when my advice is ignored and then the same question is asked again.",
    "You mean to tell me that water is wet? Mind-blowing!",
    "Oh, you worked *so hard* by reposting that? You must be exhausted!",
    "Wow, your fake laugh is so convincing. You should win an Oscar!",
    "Yes, I totally believe that you 'almost made it' as a professional athlete.",
    "Oh yes, tell me again how your life is harder than literally everyone else’s.",
    "Wow, what a unique thought. Almost like every other person on the internet had it first.",
    "Oh sure, blame Mercury retrograde instead of your bad decisions.",
    "No, really, your story about traffic was absolutely riveting.",
    "Oh wow, another influencer telling me to ‘just be myself’ while being completely fake.",
    "Yes, the Wi-Fi went down. Let’s all panic immediately!",
    "Oh, you woke up early? Here, have a medal.",
    "Wow, you eat ‘clean’? You must be morally superior to the rest of us peasants.",
    "Of course, I’d love to watch you scroll through TikTok while we ‘hang out.’",
    "Oh wow, another person who thinks ‘Netflix and chill’ means actually watching Netflix.",
    "Sure, sure, ‘one more episode’—we both know that's a lie.",
    "Oh yes, because giving advice I didn’t ask for is exactly what I needed today.",
    "Yes, please tell me how my job works. I love unsolicited expert opinions!",
    "Oh, you’re ‘not like other girls’? Incredible, you should get an award.",
    "Wow, you drive a car? So impressive, almost nobody does that!",
    "Of course, I believe your 'one-time' excuse. It’s *so* convincing.",
    "Oh, the ‘check engine’ light is on? I’m sure that’s just a friendly reminder!",
    "Oh wow, another ‘grindset’ tweet from someone who wakes up at noon.",
    "Oh sure, tell me how ‘easy’ my job is after doing it for two minutes.",
    "Wow, you did *exactly* what you were supposed to? Here, have a parade.",
    "Oh yes, your Instagram story really changed my life.",
    "Oh, another selfie? Thank goodness, I was starting to forget what you look like!",
    "Oh yes, tell me how you ‘don’t do drama’ while creating drama.",
    "Wow, you have opinions? Incredible, I was starting to think no one did!",
    "Oh, you 'forgot' to text back? Sure, totally believable.",
    "Oh yes, I *love* waiting for people who are always late.",
    "Wow, such a fascinating story about your dream. Tell me *every* detail!",
    "Oh wow, you watched one documentary? You must be an expert now!",
    "Yes, please, take all the credit for my hard work. I *love* that.",
    "Oh wow, your workout post is *so* motivating. I’m definitely going to the gym now!",
    "Yes, let’s ignore all logic and believe the first thing we read online.",
    "Oh sure, your conspiracy theory totally makes sense. Aliens *definitely* built the pyramids!",
    "Oh wow, you’re ‘self-made’ with family money? So inspiring!",
    "Yes, let’s all be quiet so the person who always interrupts can talk.",
    "Oh yes, please tell me your entire life story while I’m trying to leave.",
    "Oh sure, being famous must be *so* hard. My heart bleeds for you.",
    "Wow, another person who thinks they're unique for liking coffee.",
    "Oh yes, definitely get back with your ex. That always works out well!",
    "Wow, so cool how you repeat everything I just said!",
    "Oh yes, being a 'nice guy' means she *owes* you a date.",
    "Oh sure, tell me again how it’s ‘just a game’ while you scream at the screen.",
    "Wow, another motivational speech that solves all my problems!",
    "Oh yes, keep explaining my own joke to me. So helpful!",
    "Oh sure, waking up early is *so* productive. That’s why I’m still tired!",
    "Oh wow, another ‘no makeup’ selfie with 10 filters. So natural!",
    "Yes, I *love* when people talk over me. Please, continue!",
    "Oh wow, you read a book once? Please, educate me more!",
    "Oh sure, I’ll believe you’ll ‘change’ this time.",
    "Yes, I *love* being told to ‘smile more.’ So refreshing!",
    "Oh yes, I *definitely* needed to hear your political rant right now!",
    "Wow, what a shocking plot twist! The main character survives? Never saw that coming!",
    "Oh yes, please take your time responding to my urgent text.",
    "Wow, your 100th selfie this week? So unexpected!",
    "Oh sure, you’re ‘different’ because you watch anime. So unique!"
  ];
  
  document.querySelector("#genSarcasticQuotes").onclick = () => {
    const sarcasticQuote = sarcasticQuotes[Math.floor(Math.random() * sarcasticQuotes.length)];
    quoteContent.textContent = sarcasticQuote;
  }