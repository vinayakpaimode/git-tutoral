
 
 git --version

// below command givs you error 
  git status


//for create git repository 
 git init

 
// below command will not give you error
  git status


// below commnd add your file staging phase
 git add .


//for config name

git config --global user.name "vinayak paimode"

//for config email
git config --global user.email "vinayakpaimode61382gmail.com"

//for commit to git
$ git commit -m "version 1 commnent"

//for checking log

git log

// create repository in git.com
//after create repository you will get this site

git remote add origin git@github.com:vinayakpaimode/git-tutoral.git

// start la he command error deyel karan ssh key tayar karavi lagel
git push -u origin master



 // ya nanter shh key add karavi lagte ekda

 //he command change hote
 git remote add origin git@github.com:vinayakpaimode/git-tutoral.git


 eval "$(ssh-agent -s)"

 ssh-add ~/.ssh/id_ed25519

 clip < ~/.ssh/id_ed25519.pub

 //upper commnad copy shh key past this key in shh Add shh key section and create a kay



 //now this command will run 
 //he command code git la push karte

 git push -u origin master


 // je kahi change zalet te pull kaarun ghete
 
 git pull origin master




 step 
1)git --version

2)git status

3)git init

4)$ git add .

5)$ git commit -m "version 1 commnent"

6) git config --global user.name "vinayak paimode"

7) git config --global user.email "vinayakpaimode61382gmail.com"

8) git commit -m "version 1 commnent"

9) git log

10) git status

11) git push -u origin master

12) git pull origin master






















 Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts
$ git --version
git version 2.39.1.windows.1

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts
$ ^C

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts
$ git status
fatal: not a git repository (or any of the parent directories): .git

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts
$ git --version
git version 2.39.1.windows.1

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts
$ git init
Initialized empty Git repository in C:/Users/Admin/Downloads/git tuts/.git/

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master

No commits yet

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        git_command.php
        index.txt

nothing added to commit but untracked files present (use "git add" to track)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git add .

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ ^C

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)
        new file:   git_command.php
        new file:   index.txt

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   git_command.php


Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 1 commnent"
Author identity unknown

*** Please tell me who you are.

Run

  git config --global user.email "you@example.com"
  git config --global user.name "Your Name"

to set your account's default identity.
Omit --global to set the identity only in this repository.

fatal: unable to auto-detect email address (got 'Admin@DESKTOP-R7RVNHD.(none)')

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git cnfig --global user.name="vinnayak paimode"
git: 'cnfig' is not a git command. See 'git --help'.

The most similar command is
        config

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git cnfig --global user.email="vinayakpaimode6138@gmail.com"
git: 'cnfig' is not a git command. See 'git --help'.

The most similar command is
        config

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 1 commnent"
Author identity unknown

*** Please tell me who you are.

Run

  git config --global user.email "you@example.com"
  git config --global user.name "Your Name"

to set your account's default identity.
Omit --global to set the identity only in this repository.

fatal: unable to auto-detect email address (got 'Admin@DESKTOP-R7RVNHD.(none)')

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git config --global user.name="vinnayak paimode"
error: invalid key: user.name=vinnayak paimode

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git config --global user.name "vinayak paimode"

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git config --global user.email "vinayakpaimode61382gmail.com"

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 1 commnent"
[master (root-commit) c189386] version 1 commnent
 2 files changed, 12 insertions(+)
 create mode 100644 git_command.php
 create mode 100644 index.txt

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit c18938664f652cb8e75e9f983346d7d3bed78d95 (HEAD -> master)
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   git_command.php

no changes added to commit (use "git add" and/or "git commit -a")

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git add .

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   git_command.php


Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 2  comment"
[master 7e2d080] version 2  comment
 1 file changed, 18 insertions(+)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
nothing to commit, working tree clean

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit 7e2d080ab3921216dd8c000696317d068650265a (HEAD -> master)
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:12:20 2023 +0530

    version 2  comment

commit c18938664f652cb8e75e9f983346d7d3bed78d95
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit 7e2d080ab3921216dd8c000696317d068650265a (HEAD -> master)
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:12:20 2023 +0530

    version 2  comment

commit c18938664f652cb8e75e9f983346d7d3bed78d95
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit 7e2d080ab3921216dd8c000696317d068650265a (HEAD -> master)
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:12:20 2023 +0530

    version 2  comment

commit c18938664f652cb8e75e9f983346d7d3bed78d95
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   git_command.php

no changes added to commit (use "git add" and/or "git commit -a")

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git add .

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   git_command.php


Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 3  comment"
[master 849c8d4] version 3  comment
 1 file changed, 5 insertions(+)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit 849c8d42cebeb5b6258fc0fc6ad1954639ced074 (HEAD -> master)
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:16:20 2023 +0530

    version 3  comment

commit 7e2d080ab3921216dd8c000696317d068650265a
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:12:20 2023 +0530

    version 2  comment

commit c18938664f652cb8e75e9f983346d7d3bed78d95
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
nothing to commit, working tree clean

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git remote add origin git@github.com:vinayakpaimode/git-tutoral.git

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git push -u origin master
The authenticity of host 'github.com (64:ff9b::14cf:4952)' can't be established.
ED25519 key fingerprint is SHA256:+DiY3wvvV6TuJJhbpZisF/zLDA0zPMSvHdkr4UvCOqU.
This key is not known by any other names.
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
Warning: Permanently added 'github.com' (ED25519) to the list of known hosts.
git@github.com: Permission denied (publickey).
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ ssh-keygen -t ed25519 -C "vinayakpaimode61382gmail.com"
Generating public/private ed25519 key pair.
Enter file in which to save the key (/c/Users/Admin/.ssh/id_ed25519):
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /c/Users/Admin/.ssh/id_ed25519
Your public key has been saved in /c/Users/Admin/.ssh/id_ed25519.pub
The key fingerprint is:
SHA256:f00Y2pKflsbHo8XbbUt9KDa3h1kNh1g9d6E1kpQWHps vinayakpaimode61382gmail.com
The key's randomart image is:
+--[ED25519 256]--+
|            .=+=.|
|            .+O.=|
|            oE .+|
|           +.oo .|
|        S + o .o.|
|         . + B .+|
|          . % X=o|
|           = B+==|
|            . o++|
+----[SHA256]-----+

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$  eval "$(ssh-agent -s)"
Agent pid 1110

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ ssh-add ~/.ssh/id_ed25519
Identity added: /c/Users/Admin/.ssh/id_ed25519 (vinayakpaimode61382gmail.com)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ clip < ~/.ssh/id_ed25519.pu
bash: /c/Users/Admin/.ssh/id_ed25519.pu: No such file or directory

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ clip < ~/.ssh/id_ed25519.pub

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git push -u origin master
Enumerating objects: 10, done.
Counting objects: 100% (10/10), done.
Delta compression using up to 4 threads
Compressing objects: 100% (9/9), done.
Writing objects: 100% (10/10), 1.01 KiB | 258.00 KiB/s, done.
Total 10 (delta 2), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (2/2), done.
To github.com:vinayakpaimode/git-tutoral.git
 * [new branch]      master -> master
branch 'master' set up to track 'origin/master'.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git pull -u origin master
error: unknown switch `u'
usage: git pull [<options>] [<repository> [<refspec>...]]

    -v, --verbose         be more verbose
    -q, --quiet           be more quiet
    --progress            force progress reporting
    --recurse-submodules[=<on-demand>]
                          control for recursive fetching of submodules

Options related to merging
    -r, --rebase[=(false|true|merges|interactive)]
                          incorporate changes by rebasing rather than merging
    -n                    do not show a diffstat at the end of the merge
    --stat                show a diffstat at the end of the merge
    --log[=<n>]           add (at most <n>) entries from shortlog to merge commit message
    --signoff[=...]       add a Signed-off-by trailer
    --squash              create a single commit instead of doing a merge
    --commit              perform a commit if the merge succeeds (default)
    --edit                edit message before committing
    --cleanup <mode>      how to strip spaces and #comments from message
    --ff                  allow fast-forward
    --ff-only             abort if fast-forward is not possible
    --verify              control use of pre-merge-commit and commit-msg hooks
    --verify-signatures   verify that the named commit has a valid GPG signature
    --autostash           automatically stash/stash pop before and after
    -s, --strategy <strategy>
                          merge strategy to use
    -X, --strategy-option <option=value>
                          option for selected merge strategy
    -S, --gpg-sign[=<key-id>]
                          GPG sign commit
    --allow-unrelated-histories
                          allow merging unrelated histories

Options related to fetching
    --all                 fetch from all remotes
    -a, --append          append to .git/FETCH_HEAD instead of overwriting
    --upload-pack <path>  path to upload pack on remote end
    -f, --force           force overwrite of local branch
    -t, --tags            fetch all tags and associated objects
    -p, --prune           prune remote-tracking branches no longer on remote
    -j, --jobs[=<n>]      number of submodules pulled in parallel
    --dry-run             dry run
    -k, --keep            keep downloaded pack
    --depth <depth>       deepen history of shallow clone
    --shallow-since <time>
                          deepen history of shallow repository based on time
    --shallow-exclude <revision>
                          deepen history of shallow clone, excluding rev
    --deepen <n>          deepen history of shallow clone
    --unshallow           convert to a complete repository
    --update-shallow      accept refs that update .git/shallow
    --refmap <refmap>     specify fetch refmap
    -o, --server-option <server-specific>
                          option to transmit
    -4, --ipv4            use IPv4 addresses only
    -6, --ipv6            use IPv6 addresses only
    --negotiation-tip <revision>
                          report that we have only objects reachable from this object
    --show-forced-updates
                          check for forced-updates on all updated branches
    --set-upstream        set upstream for git pull/fetch


Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git pull origin master
From github.com:vinayakpaimode/git-tutoral
 * branch            master     -> FETCH_HEAD
Already up to date.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   git_command.php

no changes added to commit (use "git add" and/or "git commit -a")

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git add .

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git commit -m "version 4  comment"
[master 2e1541a] version 4  comment
 1 file changed, 1 insertion(+)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git push -u origin master
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 320 bytes | 320.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To github.com:vinayakpaimode/git-tutoral.git
   849c8d4..2e1541a  master -> master
branch 'master' set up to track 'origin/master'.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git pull origin master
remote: Enumerating objects: 5, done.
remote: Counting objects: 100% (5/5), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (3/3), 682 bytes | 45.00 KiB/s, done.
From github.com:vinayakpaimode/git-tutoral
 * branch            master     -> FETCH_HEAD
   2e1541a..1fe59b7  master     -> origin/master
Updating 2e1541a..1fe59b7
Fast-forward
 index.txt | 2 +-
 1 file changed, 1 insertion(+), 1 deletion(-)

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git log
commit 1fe59b7cc6e654cd149ab0268821644bc0c78b8d (HEAD -> master, origin/master)
Author: vinayakpaimode <75262287+vinayakpaimode@users.noreply.github.com>
Date:   Thu Jan 19 02:27:28 2023 +0530

    mera change

commit 2e1541ae8370a151dcd99ead4b919ceb06879e72
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 02:22:42 2023 +0530

    version 4  comment

commit 849c8d42cebeb5b6258fc0fc6ad1954639ced074
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:16:20 2023 +0530

    version 3  comment

commit 7e2d080ab3921216dd8c000696317d068650265a
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:12:20 2023 +0530

    version 2  comment

commit c18938664f652cb8e75e9f983346d7d3bed78d95
Author: vinayak paimode <vinayakpaimode61382gmail.com>
Date:   Thu Jan 19 01:07:49 2023 +0530

    version 1 commnent

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git remote add origin git@github.com:vinayakpaimode/git-tutoral.git
error: remote origin already exists.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git push -u origin master
Everything up-to-date
branch 'master' set up to track 'origin/master'.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ ^C


Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$ git pull origin master
From github.com:vinayakpaimode/git-tutoral
 * branch            master     -> FETCH_HEAD
Already up to date.

Admin@DESKTOP-R7RVNHD MINGW64 ~/Downloads/git tuts (master)
$



true vinayak
 