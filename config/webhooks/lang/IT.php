<?php
/*
	Welcome to webhooks translation file!
	You're currently at Italian (Italiano) language
	Credits: Fenix668

	If you see array instead of simple string, that means you can add as many variations of translation as you want and they will be picked randomly
*/
$webhookLang['rateSuccessTitle'] = ['Un nuovo livello è stato valutato!', 'Nuovo livello valutato!', 'Qualcuno ha valutato un livello!']; // This one is array
$webhookLang['rateSuccessTitleDM'] = ['Il tuo livello è stato valutato!', 'Qualcuno ha valutato il tuo livello!'];
$webhookLang['rateSuccessDesc'] = '%1$s ha valutato un livello!'; // And this one is string
$webhookLang['rateSuccessDescDM'] = '%1$s ha valutato il tuo livello! %2$s';
$webhookLang['rateFailTitle'] = ['Il livello è stato svalutato!', 'Qualcuno ha svalutato il livello!'];
$webhookLang['rateFailTitleDM'] = ['Il tuo livello è stato svalutato!', 'Qualcuno ha svalutato il tuo livello!'];
$webhookLang['rateFailDesc'] = '%1$s ha svalutato il livello!';
$webhookLang['rateFailDescDM'] = '%1$s ha svalutato il tuo livello! %2$s';

$webhookLang['levelTitle'] = 'Livello';
$webhookLang['levelDesc'] = '%1$s di %2$s'; // Name by Creator
$webhookLang['levelIDTitle'] = 'ID del livello';
$webhookLang['difficultyTitle'] = 'Difficoltà';
$webhookLang['difficultyDesc0'] = '%1$s, %2$s stella'; // Auto, 1 star
$webhookLang['difficultyDesc1'] = '%1$s, %2$s stelle'; // Easy, 2 stars
$webhookLang['difficultyDesc2'] = '%1$s, %2$s stelle'; // Hard, 5 stars
$webhookLang['difficultyDescMoon0'] = '%1$s, %2$s luna'; // Auto, 1 moon (Platformer)
$webhookLang['difficultyDescMoon1'] = '%1$s, %2$s lune'; // Easy, 2 moons (Platformer)
$webhookLang['difficultyDescMoon2'] = '%1$s, %2$s lune'; // Hard, 5 moons (Platformer)
$webhookLang['statsTitle'] = 'Stato';
$webhookLang['requestedTitle'] = 'Richiesta valutazione';
$webhookLang['requestedDesc0'] = '%1$s stella'; // 1 star
$webhookLang['requestedDesc1'] = '%1$s stelle'; // 2 stars
$webhookLang['requestedDesc2'] = '%1$s stelle'; // 5 stars
$webhookLang['requestedDescMoon0'] = '%1$s luna'; // 1 moon (Platformer)
$webhookLang['requestedDescMoon1'] = '%1$s lune'; // 2 moons (Platformer)
$webhookLang['requestedDescMoon2'] = '%1$s lune'; // 5 moons (Platformer)
$webhookLang['descTitle'] = 'Descrizione';
$webhookLang['descDesc'] = '*Nessuna descrizione*';
$webhookLang['footer'] = '%1$s, grazie per aver giocato!';

$webhookLang['suggestTitle'] = ['Controlla questo livello!', 'Il livello è stato suggerito!', 'Qualcuno ha suggerito un livello!'];
$webhookLang['suggestDesc'] = '%1$s ha suggerito un livello da valutare!';
$webhookLang['footerSuggest'] = '%1$s, grazie per aver moderato!';

$webhookLang['accountLinkTitle'] = ['Collegamento dell\'account!', 'Qualcuno vuole collegare l\'account!'];
$webhookLang['accountLinkDesc'] = 'Sembra che %1$s voglia collegare il proprio account di gioco al tuo account Discord. Pubblica **!discord accetta *codice*** nel tuo profilo di gioco per farlo. Se non sei tu, **ignora** questo messaggio!';
$webhookLang['accountCodeFirst'] = 'Primo numero';
$webhookLang['accountCodeSecond'] = 'Secondo numero';
$webhookLang['accountCodeThird'] = 'Terzo numero';
$webhookLang['accountCodeFourth'] = 'Quarto numero';
$webhookLang['accountUnlinkTitle'] = ['Scollegamento dell\'account!', 'Hai scollegato il tuo account!'];
$webhookLang['accountUnlinkDesc'] = 'Hai scollegato con successo %1$s dal tuo account Discord!';
$webhookLang['accountAcceptTitle'] = ['Collegamento dell\'account!', 'Hai collegato il tuo account!'];
$webhookLang['accountAcceptDesc'] = 'Hai collegato con successo %1$s al tuo account Discord!';

$webhookLang['playerBanTitle'] = ['Il giocatore è stato bannato!', 'Qualcuno ha bannato qualcuno!', 'Bannato!'];
$webhookLang['playerBanTitleDM'] = ['Sei stato bannato!', 'Qualcuno ti ha bannato!', 'Bannato!'];
$webhookLang['playerUnbanTitle'] = ['Il giocatore è stato sbloccato!', 'Qualcuno ha sbloccato qualcuno!', 'Sbannato!'];
$webhookLang['playerUnbanTitleDM'] = ['Sei stato sbloccato!', 'Qualcuno ti ha sbloccato!', 'Sbannato!'];
$webhookLang['playerBanTopDesc'] = '%1$s ha bannato %2$s dai migliori giocatori!';
$webhookLang['playerBanTopDescDM'] = '%1$s ti ha bannato dai migliori giocatori.';
$webhookLang['playerUnbanTopDesc'] = '%1$s ha liberato %2$s dai migliori giocatori!';
$webhookLang['playerUnbanTopDescDM'] = '%1$s ti ha sbloccato dai migliori giocatori!';
$webhookLang['playerBanCreatorDesc'] = '%1$s ha bannato %2$s dai migliori giocatori!';
$webhookLang['playerBanCreatorDescDM'] = '%1$s ti ha bannato dai migliori giocatori.';
$webhookLang['playerUnbanCreatorDesc'] = '%1$s ha liberato %2$s dai creatori in alto!';
$webhookLang['playerUnbanCreatorDescDM'] = '%1$s ti ha riattivato dalla lista dei creatori!';
$webhookLang['playerBanUploadDesc'] = '%1$s ha vietato a %2$s di caricare livelli!';
$webhookLang['playerBanUploadDescDM'] = '%1$s ti ha vietato il caricamento di livelli.';
$webhookLang['playerUnbanUploadDesc'] = '%1$s ha sbloccato %2$s dal caricamento dei livelli!';
$webhookLang['playerUnbanUploadDescDM'] = '%1$s ha sbloccato il caricamento dei tuoi livelli!';
$webhookLang['playerModTitle'] = 'Moderatore';
$webhookLang['playerReasonTitle'] = 'Motivo';
$webhookLang['playerBanReason'] = '*Nessuna ragione*';
$webhookLang['footerBan'] = '%1$s.';
$webhookLang['playerBanCommentDesc'] = '%1$s ha vietato a %2$s di commentare!';
$webhookLang['playerBanCommentDescDM'] = 'Possibilità vietata a %1$s di commentarti.';
$webhookLang['playerUnbanCommentDesc'] = '%1$s ha sbloccato la capacità di %2$s di commentare!';
$webhookLang['playerUnbanCommentDescDM'] = 'Possibilità non vietata di %1$s di commentarti!';
$webhookLang['playerBanAccountDesc'] = '%1$s ha bannato l\'account di %2$s!';
$webhookLang['playerBanAccountDescDM'] = '%1$s ha bannato il tuo account.';
$webhookLang['playerUnbanAccountDesc'] = '%1$s ha sbloccato l\'account di %2$s!';
$webhookLang['playerUnbanAccountDescDM'] = '%1$s ha sbloccato il tuo account!';
$webhookLang['playerExpiresTitle'] = 'Scade';
$webhookLang['playerTypeTitle'] = 'Tipo di persona';
$webhookLang['playerTypeName0'] = 'ID dell\'account';
$webhookLang['playerTypeName1'] = 'ID dell\'utente';
$webhookLang['playerTypeName2'] = 'Indirizzo IP';

$webhookLang['dailyTitle'] = 'Nuovo livello giornaliero!';
$webhookLang['dailyTitleDM'] = 'Il tuo livello è tra i giornalieri!';
$webhookLang['dailyDesc'] = 'Questo livello è giornaliero ora!';
$webhookLang['dailyDescDM'] = 'Il tuo livello è diventato giornaliero! %1$s';
$webhookLang['weeklyTitle'] = 'Nuovo livello settimanale!';
$webhookLang['weeklyTitleDM'] = 'Il tuo livello è settimanale!';
$webhookLang['weeklyDesc'] = 'Questo livello è settimanale ora!';
$webhookLang['weeklyDescDM'] = 'Il tuo livello è diventato settimanale! %1$s';
$webhookLang['eventTitle'] = 'Nuovo livello di eventi!';
$webhookLang['eventTitleDM'] = 'Il tuo livello è il livello dell\'evento!';
$webhookLang['eventDesc'] = 'Questo livello è ora a livello di evento!';
$webhookLang['eventDescDM'] = 'Il tuo livello è stato utilizzato nell\'evento! %1$s';

$webhookLang['logsRegisterTitle'] = 'New account!';
$webhookLang['logsRegisterDesc'] = 'Someone registered new account!';
$webhookLang['logsUsernameField'] = 'Player\'s username';
$webhookLang['logsPlayerIDField'] = 'Player\'s ID';
$webhookLang['logsRegisterTimeField'] = 'Register date';
$webhookLang['logsIsActivatedField'] = 'Is activated?';
$webhookLang['logsRegisterYes'] = 'Yes';
$webhookLang['logsRegisterNo'] = 'No';

$webhookLang['logsLevelDeletedTitle'] = 'Level was deleted!';
$webhookLang['logsLevelDeletedDesc'] = 'Someone deleted level!';
$webhookLang['logsLevelChangedTitle'] = 'Level was changed!';
$webhookLang['logsLevelChangedDesc'] = 'Someone changed level!';
$webhookLang['logsLevelUploadedTitle'] = 'Level was uploaded!';
$webhookLang['logsLevelUploadedDesc'] = 'Someone uploaded a level!';
$webhookLang['logsLevelChangeNameValue'] = 'Old name:'.PHP_EOL.'%1$s'.PHP_EOL.'New name:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeExtIDValue'] = 'Old author:'.PHP_EOL.'%1$s'.PHP_EOL.'New author:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeDescValue'] = 'Old description:'.PHP_EOL.'%1$s'.PHP_EOL.'New description:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeSongIDValue'] = 'Old song:'.PHP_EOL.'%1$s'.PHP_EOL.'New song:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangeAudioTrackValue'] = 'Old audiotrack:'.PHP_EOL.'%1$s'.PHP_EOL.'New audiotrack:'.PHP_EOL.'%2$s';
$webhookLang['logsLevelChangePasswordValue'] = 'Old password:'.PHP_EOL.'||%1$s||'.PHP_EOL.'New password:'.PHP_EOL.'||%2$s||';
$webhookLang['logsLevelChangeCoinsValue'] = 'Were coins verified before?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Are coins verified after?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlistedValue'] = 'Level privacy before:'.PHP_EOL.'**%1$s**'.PHP_EOL.'Level privacy after:'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeUnlisted2Value'] = '(2) Level privacy before:'.PHP_EOL.'**%1$s**'.PHP_EOL.'(2) Level privacy after:'.PHP_EOL.'**%2$s**'; // Unused and probably will never be
$webhookLang['logsLevelChangeUpdateLockedValue'] = 'Was updating locked before?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Is updating locked after?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeCommentLockedValue'] = 'Was commenting locked before?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Is commenting locked after?'.PHP_EOL.'**%2$s**';
$webhookLang['logsLevelChangeNameField'] = 'Level name was changed';
$webhookLang['logsLevelChangeExtIDField'] = 'Level author was changed';
$webhookLang['logsLevelChangeDescField'] = 'Level description was changed';
$webhookLang['logsLevelChangeSongIDField'] = 'Level song was changed';
$webhookLang['logsLevelChangeAudioTrackField'] = 'Level audiotrack was changed';
$webhookLang['logsLevelChangePasswordField'] = 'Level password was changed';
$webhookLang['logsLevelChangeCoinsField'] = 'Level coins were changed';
$webhookLang['logsLevelChangeUnlistedField'] = 'Level privacy was changed';
$webhookLang['logsLevelChangeUnlisted2Field'] = 'Level privacy was changed (2)'; // Unused and probably will never be
$webhookLang['logsLevelChangeUpdateLockedField'] = 'Updating lock status was changed';
$webhookLang['logsLevelChangeCommentLockedField'] = 'Commenting lock status was changed';
$webhookLang['logsLevelChangeWhoField'] = 'Who changed level?';

$webhookLang['songTitle'] = 'Song';
$webhookLang['levelIsPublic'] = 'Level is public';
$webhookLang['levelOnlyForFriends'] = 'Level is only for friends';
$webhookLang['levelIsUnlisted'] = 'Level is unlisted';
$webhookLang['unlistedTitle'] = 'Level privacy';

$webhookLang['logsAccountChangeWhoField'] = 'Who changed account?';
$webhookLang['logsAccountChangeUsernameField'] = 'Username was changed';
$webhookLang['logsAccountChangeUsernameValue'] = 'Username before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Username after:'.PHP_EOL.'`%2$s`';
$webhookLang['mS0'] = 'Direct messages are opened';
$webhookLang['mS1'] = 'Direct messages are opened only for friends';
$webhookLang['mS2'] = 'Direct messages are closed';
$webhookLang['logsAccountChangeMSField'] = 'Direct messages privacy was changed';
$webhookLang['logsAccountChangeMSValue'] = 'Direct messages privacy before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Direct messages privacy after:'.PHP_EOL.'`%2$s`';
$webhookLang['frS0'] = 'Friend requests are opened';
$webhookLang['frS1'] = 'Friend requests are closed';
$webhookLang['logsAccountChangeFRSField'] = 'Friend requests privacy was changed';
$webhookLang['logsAccountChangeFRSValue'] = 'Friend request privacy before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Friend request privacy after:'.PHP_EOL.'`%2$s`';
$webhookLang['cS0'] = 'Comments history is opened';
$webhookLang['cS1'] = 'Comments history is opened only for friends';
$webhookLang['cS2'] = 'Comments history is closed';
$webhookLang['logsAccountChangeCSField'] = 'Comments history privacy was changed';
$webhookLang['logsAccountChangeCSValue'] = 'Comments history privacy before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Comments history privacy after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeYTField'] = 'YouTube channel link was changed';
$webhookLang['logsAccountChangeYTValue'] = 'YouTube channel link before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'YouTube channel link after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoYT'] = 'No YouTube channel link';
$webhookLang['logsAccountChangeTWField'] = 'X account link was changed';
$webhookLang['logsAccountChangeTWValue'] = 'X account link before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'X account link after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTW'] = 'No X account link';
$webhookLang['logsAccountChangeTTVField'] = 'Twitch channel link was changed';
$webhookLang['logsAccountChangeTTVValue'] = 'Twitch channel link before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Twitch channel link after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsAccountChangeNoTTV'] = 'No Twitch channel link';
$webhookLang['logsAccountChangeActiveField'] = 'Account activity status was changed';
$webhookLang['logsAccountChangeActiveValue'] = 'Was account activated before?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Is account activated after?'.PHP_EOL.'**%2$s**';
$webhookLang['logsAccountChangePasswordField'] = 'Password was changed';
$webhookLang['logsAccountChangePasswordValue'] = '||... What did you want to see here?||';
$webhookLang['logsWhatWasChangedField'] = 'What was changed?';
$webhookLang['logsAccountChangedTitle'] = 'Account was changed!';
$webhookLang['logsAccountChangedDesc'] = 'Someone changed account!';

$webhookLang['logsListChangeWhoField'] = 'Who changed list?';
$webhookLang['logsListDeletedTitle'] = 'List was deleted!';
$webhookLang['logsListDeletedDesc'] = 'Someone deleted list!';
$webhookLang['logsListUploadedTitle'] = 'List was uploaded!';
$webhookLang['logsListUploadedDesc'] = 'Someone uploaded list!';
$webhookLang['listTitle'] = 'List';
$webhookLang['listIDTitle'] = 'List ID';
$webhookLang['unlistedListTitle'] = 'List privacy';
$webhookLang['listIsPublic'] = 'List is public';
$webhookLang['listIsUnlisted'] = 'List is unlisted';
$webhookLang['listOnlyForFriends'] = 'List is only for friends';
$webhookLang['logsListChangedTitle'] = 'List was changed!';
$webhookLang['logsListChangedDesc'] = 'Someone changed list!';
$webhookLang['logsListChangeNameField'] = 'List name was changed';
$webhookLang['logsListChangeNameValue'] = 'List name before:'.PHP_EOL.'%1$s'.PHP_EOL.'List name after:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeAccountIDField'] = 'List author was changed';
$webhookLang['logsListChangeAccountIDValue'] = 'List author before:'.PHP_EOL.'%1$s'.PHP_EOL.'List author after:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeDescField'] = 'List description was changed';
$webhookLang['logsListChangeDescValue'] = 'List description before:'.PHP_EOL.'%1$s'.PHP_EOL.'List description after:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeReward0'] = '**%1$s** diamond'; // 1 diamond
$webhookLang['logsListChangeReward1'] = '**%1$s** diamonds'; // 2 diamonds
$webhookLang['logsListChangeReward2'] = '**%1$s** diamonds'; // 5 diamonds
$webhookLang['logsListChangeRewardField'] = 'Reward was changed';
$webhookLang['logsListChangeRewardValue'] = 'Reward before:'.PHP_EOL.'%1$s'.PHP_EOL.'Reward after:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeUnlistedField'] = 'List privacy was changed';
$webhookLang['logsListChangeUnlistedValue'] = 'List privacy before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'List privacy after'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeDiffField'] = 'List difficulty was changed';
$webhookLang['logsListChangeDiffValue'] = 'Difficulty before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Difficulty after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeLevelsField'] = 'List levels were changed';
$webhookLang['logsListChangeLevelsValue'] = 'Levels before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Levels after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsListChangeRewardCount0'] = '**%1$s** level'; // 1 level
$webhookLang['logsListChangeRewardCount1'] = '**%1$s** levels'; // 2 levels
$webhookLang['logsListChangeRewardCount2'] = '**%1$s** levels'; // 5 levels
$webhookLang['logsListChangeRewardCountField'] = 'Required levels for reward amount was changed';
$webhookLang['logsListChangeRewardCountValue'] = 'Levels amount before:'.PHP_EOL.'%1$s'.PHP_EOL.'Levels amount after:'.PHP_EOL.'%2$s';
$webhookLang['logsListChangeCommentLockedField'] = 'Commenting lock status was changed';
$webhookLang['logsListChangeCommentLockedValue'] = 'Was commenting locked before?'.PHP_EOL.'**%1$s**'.PHP_EOL.'Is commenting locked after?'.PHP_EOL.'**%2$s**';
$webhookLang['difficultyListDesc0'] = '%1$s, %2$s diamond'; // Auto, 1 star
$webhookLang['difficultyListDesc1'] = '%1$s, %2$s diamonds'; // Easy, 2 stars
$webhookLang['difficultyListDesc2'] = '%1$s, %2$s diamonds'; // Hard, 5 stars

$webhookLang['logsModChangeWhoField'] = 'Who changed moderator?';
$webhookLang['logsModDemotedTitle'] = 'Moderator was demoted!';
$webhookLang['logsModDemotedDesc'] = 'Someone demoted moderator!';
$webhookLang['logsModPromotedTitle'] = 'Moderator was promoted!';
$webhookLang['logsModPromotedDesc'] = 'Someone promoted moderator!';
$webhookLang['logsModChangeRoleUnknown'] = '*Unknown role*';
$webhookLang['roleField'] = 'Role';
$webhookLang['logsModChangedTitle'] = 'Moderator was changed!';
$webhookLang['logsModChangedDesc'] = 'Someone changed moderator!';
$webhookLang['logsModChangeRoleField'] = 'Role was changed';
$webhookLang['logsModChangeRoleValue'] = 'Old role:'.PHP_EOL.'`%1$s`'.PHP_EOL.'New role:'.PHP_EOL.'`%2$s`';

$webhookLang['logsGauntletChangeWhoField'] = 'Who changed Gauntlet?';
$webhookLang['logsGauntletDeletedTitle'] = 'Gauntlet was deleted!';
$webhookLang['logsGauntletDeletedDesc'] = 'Someone deleted Gauntlet!';
$webhookLang['logsGauntletCreatedTitle'] = 'Gauntlet was created!';
$webhookLang['logsGauntletCreatedDesc'] = 'Someone created Gauntlet!';
$webhookLang['gauntletNameField'] = 'Gauntlet name';
$webhookLang['level1Field'] = 'First level';
$webhookLang['level2Field'] = 'Second level';
$webhookLang['level3Field'] = 'Third level';
$webhookLang['level4Field'] = 'Fourth level';
$webhookLang['level5Field'] = 'Fifth level';
$webhookLang['logsGauntletChangedTitle'] = 'Gauntlet was changed!';
$webhookLang['logsGauntletChangedDesc'] = 'Someone changed Gauntlet!';
$webhookLang['logsGauntletChangeGauntletField'] = 'Gauntlet itself was changed';
$webhookLang['logsGauntletChangeGauntletValue'] = 'Old Gauntlet:'.PHP_EOL.'`%1$s`'.PHP_EOL.'New Gauntlet:'.PHP_EOL.'`%2$s`';
$webhookLang['logsGauntletChangeLevel1Field'] = 'First level was changed';
$webhookLang['logsGauntletChangeLevelValue'] = 'Level before:'.PHP_EOL.'%1$s'.PHP_EOL.'Level after:'.PHP_EOL.'%2$s';
$webhookLang['logsGauntletChangeLevel2Field'] = 'Second level was changed';
$webhookLang['logsGauntletChangeLevel3Field'] = 'Third level was changed';
$webhookLang['logsGauntletChangeLevel4Field'] = 'Fourth level was changed';
$webhookLang['logsGauntletChangeLevel5Field'] = 'Fifth level was changed';

$webhookLang['logsMapPackChangeWhoField'] = 'Who changed Map Pack?';
$webhookLang['logsMapPackDeletedTitle'] = 'Map Pack was deleted!';
$webhookLang['logsMapPackDeletedDesc'] = 'Someone deleted Map Pack!';
$webhookLang['logsMapPackCreatedTitle'] = 'Map Pack was created!';
$webhookLang['logsMapPackCreatedDesc'] = 'Someone created Map Pack!';
$webhookLang['packField'] = 'Map Pack';
$webhookLang['packRewardCoins0'] = '%1$s coin'; // 1 coin
$webhookLang['packRewardCoins1'] = '%1$s coins'; // 2 coins
$webhookLang['packRewardCoins2'] = '%1$s coins'; // 5 coins
$webhookLang['packRewardField'] = 'Reward';
$webhookLang['packRewardValue'] = '%1$s and %2$s'; // X stars and X coins
$webhookLang['undefinedLevel'] = '*Unknown level*';
$webhookLang['packLevelsField'] = 'Levels';
$webhookLang['packColorsField'] = 'Colors';
$webhookLang['packColorsValue'] = 'Bar color: `%1$s`'.PHP_EOL.'Text color: `%2$s`';
$webhookLang['packTimestampField'] = 'Creation date';
$webhookLang['logsMapPackChangedTitle'] = 'Map Pack was changed!';
$webhookLang['logsMapPackChangedDesc'] = 'Someone changed Map Pack!';
$webhookLang['logsMapPackChangeNameField'] = 'Name was changed';
$webhookLang['logsMapPackChangeNameValue'] = 'Old name:'.PHP_EOL.'`%1$s`'.PHP_EOL.'New name:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeLevelsField'] = 'Levels were changed';
$webhookLang['logsMapPackChangeLevelsValue'] = 'Levels before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Levels after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeStarsField'] = 'Stars were changed';
$webhookLang['logsMapPackChangeStarsValue'] = 'Stars before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Stars after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeCoinsField'] = 'Coins were changed';
$webhookLang['logsMapPackChangeCoinsValue'] = 'Coins before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Coins after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeDifficultyField'] = 'Difficulty was changed';
$webhookLang['logsMapPackChangeDifficultyValue'] = 'Difficulty before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Difficulty after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor1Field'] = 'Bar color was changed';
$webhookLang['logsMapPackChangeColorValue'] = 'Color before:'.PHP_EOL.'`%1$s`'.PHP_EOL.'Color after:'.PHP_EOL.'`%2$s`';
$webhookLang['logsMapPackChangeColor2Field'] = 'Text color was changed';

$webhookLang['levelsWarningTitle'] = 'High levels amount!';
$webhookLang['levelsWarningDesc'] = 'Warning! High levels uploading amount is detected!';
$webhookLang['levelsYesterdayField'] = 'Levels amount yesterday';
$webhookLang['levelsTodayField'] = 'Levels amount today';
$webhookLang['levelsCompareField'] = 'How many times more';
$webhookLang['levelsCompareValue'] = '**%1$s** times';

$webhookLang['accountsWarningTitle'] = 'High accounts amount!';
$webhookLang['accountsWarningDesc'] = 'Warning! High accounts registering amount is detected!';
$webhookLang['accountsYesterdayField'] = 'Accounts amount yesterday';
$webhookLang['accountsTodayField'] = 'Accounts amount today';
$webhookLang['accountsCountValue0'] = '**%1$s** account'; // 1 account
$webhookLang['accountsCountValue1'] = '**%1$s** accounts'; // 2 accounts
$webhookLang['accountsCountValue2'] = '**%1$s** accounts'; // 5 accounts

$webhookLang['commentsSpammingWarningTitle'] = 'Possible comments spamming!';
$webhookLang['commentsSpammingWarningDesc'] = 'Warning! Possible comments spamming detected!';
$webhookLang['similarCommentsField'] = 'Similar comments amount';
$webhookLang['similarCommentsValue0'] = '**%1$s** comment'; // 1 comment
$webhookLang['similarCommentsValue1'] = '**%1$s** comments'; // 2 comments
$webhookLang['similarCommentsValue2'] = '**%1$s** comments'; // 5 comments
$webhookLang['similarCommentsAuthorsField'] = 'Similar comments authors';
$webhookLang['commentsSpammerWarningTitle'] = 'Possible comments spammer!';
$webhookLang['commentsSpammerWarningDesc'] = 'Warning! Player is making too much similar comments!';
$webhookLang['commentSpammerField'] = 'Similar comments author';
$webhookLang['accountPostsSpammingWarningTitle'] = 'Possible posts spamming!';
$webhookLang['accountPostsSpammingWarningDesc'] = 'Warning! Players are making too much similar posts!';
$webhookLang['similarAccountPostsField'] = 'Similar posts amount';
$webhookLang['similarAccountPostsValue0'] = '**%1$s** post'; // 1 post
$webhookLang['similarAccountPostsValue1'] = '**%1$s** posts'; // 2 posts
$webhookLang['similarAccountPostsValue2'] = '**%1$s** posts'; // 5 posts
$webhookLang['accountPostsSpammerField'] = 'Similar posts author';
$webhookLang['accountPostsSpammerWarningTitle'] = 'Possible posts spammer!';
$webhookLang['accountPostsSpammerWarningDesc'] = 'Warning! Player is making too much similar posts!';
$webhookLang['similarAccountPostsAuthorsField'] = 'Similar posts authors';
$webhookLang['repliesSpammingWarningTitle'] = 'Possible replies spamming!';
$webhookLang['repliesSpammingWarningDesc'] = 'Warning! Players are making too much similar replies!';
$webhookLang['similarRepliesField'] = 'Similar replies amount';
$webhookLang['similarRepliesValue0'] = '**%1$s** reply'; // 1 reply
$webhookLang['similarRepliesValue1'] = '**%1$s** replies'; // 2 replies
$webhookLang['similarRepliesValue2'] = '**%1$s** replies'; // 5 replies
$webhookLang['repliesSpammerField'] = 'Similar replies author';
$webhookLang['repliesSpammerWarningTitle'] = 'Possible replies spammer!';
$webhookLang['repliesSpammerWarningDesc'] = 'Warning! Player is making too much similar replies!';
$webhookLang['similarRepliesAuthorsField'] = 'Similar replies authors';
?>