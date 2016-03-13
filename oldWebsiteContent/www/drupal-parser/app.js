var cheerio = require('cheerio');
var request = require('request');
var fs = require('fs');

var alldata = [];
var parsePage = function(url, role) {
    request(url, function(err, resp, html) {
        var data = [];
        if (err) {
            throw err;
        }
        $ = cheerio.load(html);
        $(".node-profile").each(function() {
            var profile = {};
            $(this).find(".field-type-text").each(function() {
                var key = $(this).find(".field-label").html();
                key = key.split(":").join("");
                key = key.split("&nbsp;").join("");
                var value = $(this).find(".field-item").html();
                profile[key] = value;
            });
            profile.Role = role;
            profile.Name = $(this).find("h2 a").html();
            profile.Image = $(this).find("img").parent().attr('href');
            if (profile["E-Mail"])
                profile["E-Mail"] = profile["E-Mail"].split("[@]").join("@");
            //this data is generally wrong. Let's not use it anymore.
            delete profile.Standing;
            data.push(profile);
        });
        numdone++;
        if (numdone == total) {
            finished();
        };
        for (var i = 0; i < data.length; i++) {
            alldata.push(data[i]);
        };
    });
}

total = 6;
numdone = 0;
parsePage('http://delta.khk.org/members', "member");
parsePage('http://delta.khk.org/pledges', "pledge");
parsePage('http://delta.khk.org/alumni', "alumni");
parsePage('http://delta.khk.org/alumni?page=1', "alumni");
parsePage('http://delta.khk.org/alumni?page=2', "alumni");
parsePage('http://delta.khk.org/alumni?page=3', "alumni");

function finished() {
    var outputFilename = 'people.json';

    // console.log(alldata);
    fs.writeFile(outputFilename, JSON.stringify(alldata), function(err) {
        if (err) {
            console.log(err);
        } else {
            console.log("JSON saved to " + outputFilename);
        }
    });
}